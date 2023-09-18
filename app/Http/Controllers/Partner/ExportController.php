<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Exports\ExportStaff;
//use Maatwebsite\Excel\Facades\Excel;
//use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Auth;
use App\Models\Partner\Staff;

class ExportController extends Controller
{
    public function exportStaffByRole($id, $type)
	{

		//return Excel::download(new ExportStaff, 'export.xlsx');
        //return Excel::download(new InvoicesExport, 'invoices.csv', \Maatwebsite\Excel\Excel::CSV);
        //return Excel::download(new InvoicesExport, 'invoices.xlsx', \Maatwebsite\Excel\Excel::XLSX);
        //return Excel::download(new InvoicesExport, 'invoices.pdf', \Maatwebsite\Excel\Excel::DOMPDF);

        $partner_id = Auth::user()->id;

        $staff      = Staff::where('partner_id', $partner_id);
        $getStaff   = $staff->select(['users.name', 'users.email', 'users.phone', 'role.role_name', 'staff.facebook', 'staff.instagram', 'staff.joining_date', 'staff.gender'])
                ->leftJoin('users', 'users.id', '=', 'staff.user_id')
                ->leftJoin('role', 'role.id', '=', 'staff.staff_role')
                ->where('staff.staff_role', $id)
                ->orderBy('staff.staff_id', 'DESC')
                ->get()->toArray();

        if ($type == "csv") {

            $fileName = 'export.csv';

            $headers = array(
                "Content-type"        => "text/csv",
                "Content-Disposition" => "attachment; filename=$fileName",
                "Pragma"              => "no-cache",
                "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
                "Expires"             => "0"
            );

            $columns = array('Name', 'Email', 'Phone', 'Role', 'Facebook', 'Instagram', 'Joining Date', 'Gender');

            $callback = function() use($getStaff, $columns) {
                $file = fopen('php://output', 'w');
                fputcsv($file, $columns);

                foreach ($getStaff as $task) { //echo "<pre>"; print_r($task); die;
                    $row['Name']        = $task['name'];
                    $row['Email']       = $task['email'];
                    $row['Phone']       = $task['phone'];
                    $row['Role']        = $task['role_name'];
                    $row['Facebook']    = $task['facebook'];
                    $row['Instagram']   = $task['instagram'];
                    $row['Joining Date']= $task['joining_date'];
                    $row['Gender']      = $task['gender'];

                    fputcsv($file, array($row['Name'], $row['Email'], $row['Phone'], $row['Role'], $row['Facebook'], $row['Instagram'], $row['Joining Date'], $row['Gender']));
                }

                fclose($file);
            };

            return response()->stream($callback, 200, $headers);
        }
        if ($type == "pdf") {
            /*$csv = Writer::createFromFileObject(new \SplTempFileObject());

            $pdf = PDF::loadView('pdf.export', compact('getStaff'));
            return $pdf->download('export.pdf');*/

            /*return Excel::create('export', function($excel) use ($getStaff) {
                $excel->sheet('mySheet', function($sheet) use ($getStaff)
                {
                    $sheet->fromArray($getStaff);
                });
            })->download("pdf");*/
        }
		
	}
}

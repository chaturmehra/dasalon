<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Exports\ExportStaff;
//use Maatwebsite\Excel\Facades\Excel;
//use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Auth;
use App\Models\Partner\Staff;
use SplFileObject;

class ExportController extends Controller
{
    public function exportStaffByRole($id, $type)
	{

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

            $csvFile = new SplFileObject(storage_path('app/' . $fileName), 'w');
            $csvFile->fputcsv([
                'Name', 'Email', 'Phone', 'Role', 'Facebook', 'Instagram', 'Joining Date', 'Gender'
            ]);

            foreach ($getStaff as $row) {
                $csvFile->fputcsv([
                    $row['name'],
                    $row['email'],
                    $row['phone'],
                    $row['role_name'],
                    $row['facebook'],
                    $row['instagram'],
                    $row['joining_date'],
                    $row['gender']
                ]);
            }

            $csvFile = null;
            return response()->download(storage_path('app/' . $fileName));
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

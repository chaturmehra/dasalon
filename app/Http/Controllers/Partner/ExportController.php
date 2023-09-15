<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Exports\ExportStaff;
use Maatwebsite\Excel\Facades\Excel;
use League\Csv\Writer;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Auth;
use App\Models\Partner\Staff;

class ExportController extends Controller
{
    public function exportStaffByRole($id, $type)
	{

		//return Excel::download(new ExportStaff, 'export.xlsx');

        $partner_id = Auth::user()->id;

        $staff      = Staff::where('partner_id', $partner_id);
        $getStaff   = $staff->select(['users.name', 'users.email', 'users.phone', 'role.role_name', 'staff.facebook', 'staff.instagram', 'staff.joining_date', 'staff.gender'])
                ->leftJoin('users', 'users.id', '=', 'staff.user_id')
                ->leftJoin('role', 'role.id', '=', 'staff.staff_role')
                ->where('staff.staff_role', $id)
                ->orderBy('staff.staff_id', 'DESC')
                ->get();

        if ($type == "csv") {
            $csv = Writer::createFromFileObject(new \SplTempFileObject());

            $csv->insertOne(['Name', 'Email', 'Phone', 'Role', 'facebook', 'instagram', 'joining_date', 'gender']);

            foreach ($getStaff as $row) {
                $csv->insertOne($row->toArray());
            }

            return $csv->output('export.csv');
        }
        if ($type == "pdf") {
            $csv = Writer::createFromFileObject(new \SplTempFileObject());

            $pdf = PDF::loadView('pdf.export', compact('getStaff'));
            return $pdf->download('export.pdf');
        }
		
		/*$partner_id = Auth::user()->id;

		$staff 		= Staff::where('partner_id', $partner_id);
		$getStaff 	= $staff->select(['staff.staff_id', 'staff.user_id', 'staff.partner_id', 'users.name', 'users.email', 'users.phone', 'users.is_active', 'staff.profile_image', 'role.role_name'])
                ->leftJoin('users', 'users.id', '=', 'staff.user_id')
                ->leftJoin('role', 'role.id', '=', 'staff.staff_role')
                ->where('staff.staff_role', $id)
                ->orderBy('staff.staff_id', 'DESC')
                ->get();*/

        //$response = $this->commonFilterByRoleReset($getStaff);

        //echo json_encode($response);
	}
}

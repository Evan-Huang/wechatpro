<?php

namespace App\Http\Controllers\Backend;

use App\Client;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $records = Client::orderBy('created_at', 'ASC')->paginate(30);

        return view('backend.report.index')->with('records', $records);
    }

    public function export()
    {
        return Excel::create('Report_' . date('Y-m-d_H-i-s'), function($excel) {

            $excel->sheet('Report', function($sheet) {

                // Sheet manipulation

                $sheet->row(1, array('#', '郵箱','姓名', '電話號碼', '建立日期'));

                $index = 2;

                foreach( Client::orderBy('created_at', 'ASC')->get() as $i => $contact )
                {
                    $sheet->row($index, array(($i + 1), $contact->email,$contact->clientname, $contact->phone,  $contact->created_at));

                    $index++;
                }

            });

        })->download('xls');
    }

}

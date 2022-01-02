<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Excel;

class ImportExportController extends Controller
{
    public function import()
    {
        return view('import');
    }

    public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    public function saveImport()
    {
        Excel::import(new UsersImport,request()->file('file'));

        return back();
    }
}

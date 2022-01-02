<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Imports\UsersImport;
use App\Imports\UsersImportWithValidation;
use App\Models\User;
use Maatwebsite\Excel\Facades\Excel;

class ImportExportController extends Controller
{
    public function import()
    {
        return view('import');
    }

    public function export()
    {
//        $users = User::select('id','name','email')->get();
        $users = User::select('id','name','email')->where('id','<',100)->get();
//        $users = User::where('id','<',100)->get();

        return Excel::download(new UsersExport($users), 'users.xlsx');
    }

    public function saveImport()
    {
        Excel::import(new UsersImport,request()->file('file'));
        return back();
    }

    public function importWithValidation(){
        Excel::import(new UsersImportWithValidation,request()->file('file'));
        return back()->with('success', 'User Imported Successfully.');
    }
}

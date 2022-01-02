<?php

namespace App\Http\Controllers;

use App\Exports\CustomExportWithHeaders;
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

    public function customExport()
    {
        $data = array();
        $users = User::with('projects')->get();
        foreach ($users as $user){
            foreach ($user->projects as $project){
                $tempArray = [];
                $tempArray['user_id'] = $user->id;
                $tempArray['name'] = $user->name;
                $tempArray['email'] = $user->email;
                $tempArray['email'] = $user->email;
                $tempArray['project_id'] = $project->id;
                $tempArray['project_description'] = $project->body;
                $data[] = $tempArray;
            }
        }
        return Excel::download(new CustomExportWithHeaders($data), 'custom_export.xlsx');
    }

    public function saveExcelFile()
    {
        $data = array();
        $users = User::with('projects')->where('id','<' , 10)->get();
        foreach ($users as $user){
            foreach ($user->projects as $project){
                $tempArray = [];
                $tempArray['user_id'] = $user->id;
                $tempArray['name'] = $user->name;
                $tempArray['email'] = $user->email;
                $tempArray['email'] = $user->email;
                $tempArray['project_id'] = $project->id;
                $tempArray['project_description'] = $project->body;
                $data[] = $tempArray;
            }
        }
        $filename = 'Sales Register 2019 Cr.xlsx';
        Excel::store(new CustomExportWithHeaders($data), $filename, 'public');

        echo "File storage path " .  $file = storage_path($filename);
    }

    public function exportUsingJob()
    {
        $data = array();
        $users = User::with('projects')->get();
        foreach ($users as $user){
            foreach ($user->projects as $project){
                $tempArray = [];
                $tempArray['user_id'] = $user->id;
                $tempArray['name'] = $user->name;
                $tempArray['email'] = $user->email;
                $tempArray['email'] = $user->email;
                $tempArray['project_id'] = $project->id;
                $tempArray['project_description'] = $project->body;
                $data[] = $tempArray;
            }
        }
        return Excel::download(new CustomExportWithHeaders($data), 'custom_export.xlsx');
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

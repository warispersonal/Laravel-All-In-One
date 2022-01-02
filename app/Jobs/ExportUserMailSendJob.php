<?php

namespace App\Jobs;

use App\Exports\CustomExportWithHeaders;
use App\Mail\UserEmailFileExport;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class ExportUserMailSendJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
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

        Mail::to('wariszargardev@gmail.com')->send(new UserEmailFileExport($filename));
    }
}

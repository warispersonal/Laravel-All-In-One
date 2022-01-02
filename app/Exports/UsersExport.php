<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection, WithHeadings
{
    public $users;

    public function __construct($users)
    {
        $this->users = $users;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return $this->users;
//        return User::where('id', '<=' ,'100')->get();
//        return User::all();
    }

    public function headings(): array
    {
        return [
            "ID",
            "Name",
            "Email"
        ];
    }
}

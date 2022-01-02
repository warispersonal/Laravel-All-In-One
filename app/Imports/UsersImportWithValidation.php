<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImportWithValidation implements ToCollection, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            //
        ]);
    }

    public function collection(Collection $rows)
    {
        Validator::make($rows->toArray(), [
            '*.name' => 'required',
            '*.email' => 'required|email|unique:users',
            '*.password' => 'required',
        ])->validate();

        foreach ($rows as $row) {
                User::create([
                    'name' => $row['name'],
                    'email' => $row['email'],
                    'password' => bcrypt($row['password']),
                ]);
            }
    }
}

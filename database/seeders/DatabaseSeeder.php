<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        foreach (range(1,1000) as $index) {
            DB::table('employees')->insert([
                'name' => "fsdfjksddsa",
                'email' => "fdsfdjsfhdsfj@fsa.sa",
                'phone_number' => 111656656565,
                'dob' => date($format = 'D-m-y')
            ]);
        }
    }
}

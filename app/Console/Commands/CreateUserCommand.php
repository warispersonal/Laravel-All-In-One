<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CreateUserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
//    protected $signature = 'user:create'; // command name without parameters
    protected $signature = 'user:create {name} {email} {password?}'; // Command with parameter

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'User create';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // argument used to get dynamically value from command
        $name = $this->argument('name');
        $pass = $this->argument('password') ?? Str::random(8);
//        $name = Str::random(8);
//        $pass = Str::random(8);
        User::create([
            'name' => $name,
            'email' => $name.'@gmail.com',
            'password' => Hash::make($pass),
        ]);

        return $this->info('Successfully user create with email: ' .$name .'@gmail.com & password: ' .$pass );
        return $this->error('Successfully user create with email: ' .$name .'@gmail.com & password: ' .$pass );
        return $this->line('Successfully user create with email: ' .$name .'@gmail.com & password: ' .$pass );
        return $this->newLine('Successfully user create with email: ' .$name .'@gmail.com & password: ' .$pass );
        return $this->newLine('Successfully user create with email: ' .$name .'@gmail.com & password: ' .$pass );
    }
}

<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class UserCreateWithProgressbarCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:multiple_create {count}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'User create with progressbar';

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
        $count = $this->argument('count');
        $bar = $this->output->createProgressBar($count);
        $bar->start();
        for ($i = 1; $i <= $count ; $i++){
            User::create([
                'name'=> Str::random(8).$i,
                'email'=> Str::random(8).$i.'@gmail.com',
                'password'=> Str::random(8),
            ]);
            $bar->advance();
        }
        $bar->finish();
        $this->info("Users " . $count . ' created');
    }
}

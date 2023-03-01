<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laravel:adduser';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Default User';

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
        $name = $this->ask('input your name broski');
        $email = $this->ask('input your email');
        $password = $this->secret('input your paasswooord');

        $this->line("User: {$name} <{$email}>");
        if ($this->confirm('Are you suree?')) {
            $user = new User();

            $user->name = $name;
            $user->email = $email;
            $user->password = Hash::make($password);

            $user->save();
            $this->info("user account succesfully created");
        }else{
            $this->error('you are not cool bro frfr');
        }
        $this->line('Done!');
    }
}

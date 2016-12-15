<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;

class CreateUserAccount extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create User Account';

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
     * @return mixed
     */
    public function handle()
    {
        //

        $username = $this->ask('Username:');

        if( !$username ) {
            echo 'Invalid username';
            echo "\n";
            exit;
        }

        if( User::where('name', '=', $username)->count() > 0 ) {
            echo 'Username already exists';
            echo "\n";
            exit;
        }


        $email = $this->ask('Email:');

        if( !$email ) {
            echo 'Invalid email';
            echo "\n";
            exit;
        }

        if( User::where('email', '=', $email)->count() > 0 ) {
            echo 'Email already exists';
            echo "\n";
            exit;
        }


        $password = $this->secret('Password:');

        if( !$password ) {
            echo 'Invalid password';
            echo "\n";
            exit;
        }

        $confirm_password = $this->secret('Confirm Password:');

        if( !$confirm_password ) {
            echo 'Invalid password';
            echo "\n";
            exit;
        }

        if( $password != $confirm_password ) {
            echo 'Two passwords do not match.';
            echo "\n";
            exit;
        }

        $user = new User;
        $user->name = $username;
        $user->email = $email;
        $user->password = \Hash::make($password);
        $user->save();

        echo 'User account ' . $username . ' has been created.';
        echo "\n";
        exit;

    }
}

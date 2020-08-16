<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        factory(User::class, 20)->create();

        User::create([
            'name' => "Jun",
            'email' => "jun@gmail.com",
            'password' => Hash::make('password'),
        ]);
    }
}

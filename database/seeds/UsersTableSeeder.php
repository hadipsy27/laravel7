<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name'      => 'Hadi Prasetyo',
            'username'  => 'hadi',
            'password'  => bcrypt('password'),
            'email'     => 'hadipsy27@gmail.com'
        ]);
    }
}

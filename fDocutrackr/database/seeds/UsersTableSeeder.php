<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //\App\User::truncate();
        \App\User::create([
            'name' => 'Super Admin',
            'username' => 'super',
            'password' => bcrypt('password'),
            'status' => config('constants.STATUS.ACTIVE')
        ])->assignRole('Super Admin');
    }
}

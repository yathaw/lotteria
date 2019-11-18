<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->insert([
            'name' => 'Boss',
            'photo' => "/storage/user/boss.png",
            'email' => 'boss@gmail.com',
            'password' => Hash::make('123456789'),
        ]);

        DB::table('users')->insert([
            'name' => 'Staff',
            'photo' => "/storage/user/staff.png",
            'email' => 'staff@gmail.com',
            'password' => Hash::make('123456789'),
        ]);

        DB::table('users')->insert([
            'name' => Str::random(10),
            'photo' => "/storage/user/staff.png",
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('123456789'),
        ]);
    }
}

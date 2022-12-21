<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Muhammad Jamil',
            'email' => 'jamilbashir012@gmail.com',
            'personal_phone_number' => '03136429161',
            'cnic' => '3650238468591',
            'role_id' => '1',
            'password' => Hash::make('123456789'),
        ]);
    }
}

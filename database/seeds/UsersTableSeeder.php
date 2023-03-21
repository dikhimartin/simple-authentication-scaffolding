<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'id_users' => 'K00001',
                'username' => 'superadmin',
                'name' => 'Dikhi Martin',
                'password' => Hash::make('superadmin'),
                'email' => 'dikhi.martin@binus.ac.id',
                'telephone' => '08123456789',
                'date_birth' => '1998-08-01',
                'address' => 'bekasi',
                'gender' => 'L',
                'id_level_user' => 1,
                'image' => '',
                'created_by' => 'K00001',
                'updated_by' => 'K00001',
                'status' => 'Y',
                'additional' => null,
                'remember_token' => null,
            ],
        ]);
    }
}

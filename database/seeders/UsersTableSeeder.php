<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('users')->insert([

            'first_name' => 'QC',
            'last_name' => 'Admin',
            'email' => 'admin@qc.com',                   
            'password' => bcrypt('test1234')
        ]);        
    }
}

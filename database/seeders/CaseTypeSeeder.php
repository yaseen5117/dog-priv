<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CaseTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('case_types')->truncate();
        DB::table('case_types')->insert([

            'id' => 1,             
            'title' => 'Criminal Case',             
            'display_order' => '1',           
             
        ]);

        DB::table('case_types')->insert([

            'id' => 2,             
            'title' => 'Civil Case',             
            'display_order' => '2',           
             
        ]);

        DB::table('case_types')->insert([

            'id' => 3,             
            'title' => 'Family Cases',             
            'display_order' => '3',           
             
        ]);

       
    }
}

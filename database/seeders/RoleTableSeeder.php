<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('role')->delete();
        
        \DB::table('role')->insert(array (
            0 => 
            array (
                'id' => 1,
                'group' => 'admin',
                'modules' => '1,2,3,4,5,6,7,8,9,10,11,12,13,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'group' => 'HR',
                'modules' => '1,4,5,6,7,8,9,10,11,12,15,16,17,18,19,20,23,25,26,28,29,30,31,32,33',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'group' => 'employee',
                'modules' => '4',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),

            3 => 
            array (
                'id' => 4,
                'group' => 'Superhr',
                'modules' => '1,2,3,4,5,6,7,8,9,10,11,12,13,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}
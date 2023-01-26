<?php

use Illuminate\Database\Seeder;

class RequestTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('request_types')->truncate();

		DB::statement("INSERT INTO request_types (id, type) VALUES
			(1, 'BEREAVEMENT'),
            (2, 'MATERNITY/PATERNITY LEAVE'),
            (3, 'VACATION LEAVE'),
            (4, 'PARENTAL LEAVE'),
            (5, 'LEAVE FOR PERSONAL OR FAMILY REASON AND SPECIAL LEAVE'),
            (6, 'LEAVE OF ABSENCE FOR COMMUNITY SERVICE'),
            (7, 'LONG LEAVE OF ABSENCE'),
			(8, 'STUDY LEAVE'),
			(9, 'EMERGENCY LEAVE'),
            (10, 'SICK LEAVE')");	
			
    }
}

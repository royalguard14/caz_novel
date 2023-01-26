<?php

use Illuminate\Database\Seeder;

class PositionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('positions')->truncate();

		DB::statement("INSERT INTO positions (id,department_id, position) VALUES
			
            (1,1,'Web-Admin')");
			
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Models\Department;
class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('departments')->truncate();

		DB::statement("INSERT INTO departments (id, head, department) VALUES
			
            (1, 1,'WEB Developer');");
    
    }
}





 









 






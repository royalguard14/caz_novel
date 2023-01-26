<?php

use Illuminate\Database\Seeder;
use App\Attendance;

class EmployeeAttendanceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('employee_attendance')->truncate();

            DB::statement("INSERT INTO  employee_attendance (id, employee_id, date, timein, timeout, status, remarks) VALUES
            (1,'111','10-13-93','8:00','12:00','stat','rem'),
            (2,'222','10-13-93','8:00','12:00','stat','rem'),
            (3,'333','10-13-93','8:00','12:00','stat','rem'),
            (4,'444','10-13-93','8:00','12:00','stat','rem'),
            (5,'555','10-13-93','8:00','12:00','stat','rem')

            ");
    }
}

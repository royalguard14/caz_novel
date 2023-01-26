<?php

use Illuminate\Database\Seeder;

class ModuleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('modules')->truncate();
        DB::statement("INSERT INTO modules (id, module,description,routeUri,default_url,icon,encryptname) VALUES

            (1, 'Record','MAINTENANCE FOR Record','record','record.index','fa fa-table',''), 
            (2, 'Users','MAINTENANCE FOR USERS','users','users.index','fa fa-users',''),
            (3, 'Modules','MAINTENANCE OF SYSTEM MODULEs','modules','modules.index','fa fa-file-text',''),

            (4, 'Dashboard','MAINTENANCE FOR Dashboard','dashboard','dashboard.index','fa fa-users',''),

            (5, 'Positions','MAINTENANCE FOR POSITIONS','positions','positions.index','fa fa-handshake-o',''),
            (6, 'Departments','MAINTENANCE FOR DEPARTMENTS','departments','departments.index','fa fa-delicious',''),
            (7, 'Holidays','MAINTENANCE FOR USERS','holiday','holidays.index','fa fa-users',''),

            (8, 'Employee','MAINTENANCE FOR employee','employee-list','employee.index','fa fa-users',''),

            (9, 'Attendance','MAINTENANCE FOR Attendance','attendance-log','payroll.attendance.index','fa fa-users',''),
            (10, 'Time Clock','MAINTENANCE FOR Import Attendance','attendance-import','payroll.import.index','fa fa-users',''),
            (11, 'Report','MAINTENANCE FOR Payroll report','payroll-report','payroll.report.index','fa fa-users',''),
            
            (12, 'Leave','MAINTENANCE FOR Leave','leave-list','request.leave.index','fa fa-users',''),
            (13, 'Resignation','MAINTENANCE FOR Resignation','resignation-list','request.resignation.index','fa fa-users',''),
            (14, 'Report','MAINTENANCE FOR request report','request-report','request.report.index','fa fa-users','');"); 
    }
}

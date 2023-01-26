<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ModulesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('modules')->delete();
        
        \DB::table('modules')->insert(array (
            0 => 
            array (
                'id' => 1,
                'module' => 'Record',
                'description' => 'VIEW REPORTS',
                'routeUri' => 'record',
                'icon' => 'fa fa-table',
                'default_url' => 'record.index',
                'encryptname' => '',
                'created_at' => NULL,
                'updated_at' => '2022-04-20 01:23:57',
            ),
            1 => 
            array (
                'id' => 2,
                'module' => 'Users',
                'description' => 'MAINTENANCE FOR USERS',
                'routeUri' => 'users',
                'icon' => 'fa fa-users',
                'default_url' => 'users.index',
                'encryptname' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'module' => 'Modules',
                'description' => 'MAINTENANCE OF SYSTEM MODULEs',
                'routeUri' => 'modules',
                'icon' => 'fa fa-file-text',
                'default_url' => 'modules.index',
                'encryptname' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'module' => 'Dashboard',
                'description' => 'MAINTENANCE FOR Dashboard',
                'routeUri' => 'dashboard',
                'icon' => 'fa fa-users',
                'default_url' => 'dashboard.index',
                'encryptname' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'module' => 'Positions',
                'description' => 'MAINTENANCE FOR POSITIONS',
                'routeUri' => 'positions',
                'icon' => 'fa fa-handshake-o',
                'default_url' => 'positions.index',
                'encryptname' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'module' => 'Departments',
                'description' => 'MAINTENANCE FOR DEPARTMENTS',
                'routeUri' => 'departments',
                'icon' => 'fa fa-delicious',
                'default_url' => 'departments.index',
                'encryptname' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'module' => 'Holidays',
                'description' => 'MAINTENANCE FOR USERS',
                'routeUri' => 'holidays',
                'icon' => 'fa fa-users',
                'default_url' => 'holidays.list',
                'encryptname' => '',
                'created_at' => NULL,
                'updated_at' => '2022-02-16 14:13:45',
            ),
            7 => 
            array (
                'id' => 8,
                'module' => 'Employee List',
                'description' => 'MAINTENANCE FOR employee',
                'routeUri' => 'employee',
                'icon' => 'fa fa-users',
                'default_url' => 'employee.index',
                'encryptname' => '',
                'created_at' => NULL,
                'updated_at' => '2022-03-01 02:59:43',
            ),
            8 => 
            array (
                'id' => 9,
                'module' => 'Attendance',
                'description' => 'MAINTENANCE FOR Attendance',
                'routeUri' => 'attendance',
                'icon' => 'fa fa-users',
                'default_url' => 'attendance.index',
                'encryptname' => '',
                'created_at' => NULL,
                'updated_at' => '2022-02-11 15:48:58',
            ),
            9 => 
            array (
                'id' => 10,
                'module' => 'Time Adjustment',
                'description' => 'module for time in and time out adjustment.',
                'routeUri' => 'timemanager',
                'icon' => 'fa fa-users',
                'default_url' => 'timemanager.index',
                'encryptname' => '',
                'created_at' => NULL,
                'updated_at' => '2022-03-28 20:36:26',
            ),
            10 => 
            array (
                'id' => 11,
                'module' => 'Payroll',
                'description' => 'MAINTENANCE FOR Payroll report',
                'routeUri' => 'payroll-report',
                'icon' => 'fa fa-users',
                'default_url' => 'report.payroll',
                'encryptname' => '',
                'created_at' => NULL,
                'updated_at' => '2022-04-20 04:41:10',
            ),
            11 => 
            array (
                'id' => 12,
                'module' => 'Leave',
                'description' => 'MAINTENANCE FOR Leave',
                'routeUri' => 'leave',
                'icon' => 'fa fa-users',
                'default_url' => 'leave.index',
                'encryptname' => '',
                'created_at' => NULL,
                'updated_at' => '2022-03-05 12:30:23',
            ),
            12 => 
            array (
                'id' => 13,
                'module' => 'Resignation',
                'description' => 'MAINTENANCE FOR Resignation',
                'routeUri' => 'resignation-list',
                'icon' => 'fa fa-users',
                'default_url' => 'request.resignation.index',
                'encryptname' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'module' => 'asdsad',
                'description' => 'MAINTENANCE FOR request report',
                'routeUri' => 'request-report',
                'icon' => 'fa fa-users',
                'default_url' => 'request.report.index',
                'encryptname' => '',
                'created_at' => NULL,
                'updated_at' => '2022-04-20 01:14:59',
            ),
            14 => 
            array (
                'id' => 15,
                'module' => 'Generate',
                'description' => 'Payroll',
                'routeUri' => 'payroll',
                'icon' => 'fa fa-users',
                'default_url' => 'payroll.index',
                'encryptname' => '$2y$10$tVmeGdYOjoEXkMuP664huumIG0SMGXysNUsLQFIN7WFJ.toPj2GSa',
                'created_at' => '2022-02-11 15:29:49',
                'updated_at' => '2022-03-11 12:41:40',
            ),
            15 => 
            array (
                'id' => 16,
                'module' => 'Allowances',
                'description' => 'allowances list',
                'routeUri' => 'allowances',
                'icon' => 'fa fa-users',
                'default_url' => 'allowance.index',
                'encryptname' => '$2y$10$u4ivwHywB7bzDTsA5zj3e38KltwOgKBIQ312CTzhD3poD37J7Jy',
                'created_at' => '2022-02-16 14:47:18',
                'updated_at' => '2022-02-16 14:47:18',
            ),
            16 => 
            array (
                'id' => 17,
                'module' => 'Deduction',
                'description' => 'deduction list',
                'routeUri' => 'deduction',
                'icon' => 'fa fa-users',
                'default_url' => 'deduction.index',
                'encryptname' => '$2y$10$OI3WXI73Jt4TX.Wbb9G4KO8pR67JtgTtELz30.Z3FgdX4hsheHf1m',
                'created_at' => '2022-02-16 14:48:14',
                'updated_at' => '2022-02-16 14:48:14',
            ),
            17 => 
            array (
                'id' => 18,
                'module' => 'Incentives/Com',
                'description' => 'Incentives for employees after payroll',
                'routeUri' => 'extra_income',
                'icon' => 'fa fa-user-o',
                'default_url' => 'Incentives.index',
                'encryptname' => '$2y$10$d0A5q1gPtA1Q8OWRn5R1fO7H7Rx0shesHaXly3lJF6S0pRqymyy.e',
                'created_at' => '2022-02-17 04:32:38',
                'updated_at' => '2022-03-31 19:50:11',
            ),
            18 => 
            array (
                'id' => 19,
                'module' => 'Salary Adjustment',
                'description' => 'Salary Adjustment',
                'routeUri' => 'salary_adjutment',
                'icon' => 'fa fa-plane',
                'default_url' => 'employee.adjustment',
                'encryptname' => '$2y$10$GE37GWulQ.zPYhg0FRkuPh7rrVJUR4olp.7vJzVzOXfgqjekTe',
                'created_at' => '2022-02-17 06:05:36',
                'updated_at' => '2022-03-01 03:55:51',
            ),
            19 => 
            array (
                'id' => 20,
                'module' => 'Loan File',
                'description' => 'Employee filed Loan with amount and monthly deduction',
                'routeUri' => 'loan',
                'icon' => 'fa fa-user-o',
                'default_url' => 'loan.index',
                'encryptname' => '$2y$10$XCIAi.BjHBCvHF6gSSmItevephbbewSjBAEGxftCRGJ.r1OPmrU66',
                'created_at' => '2022-03-01 03:29:52',
                'updated_at' => '2022-03-05 15:25:51',
            ),
            20 => 
            array (
                'id' => 21,
                'module' => 'Performance',
                'description' => 'EMPLOYEE PERFORMANCE AND ACTIVITIES',
                'routeUri' => 'employee_performance',
                'icon' => 'fa fa-user-o',
                'default_url' => 'employee.performance',
                'encryptname' => '$2y$10$fAspFQsSStmPa165nPqMOwJ1R52KPkh0VGIjsmT94HpvlpPEmBY.',
                'created_at' => '2022-03-01 04:11:23',
                'updated_at' => '2022-03-01 04:11:23',
            ),
            21 => 
            array (
                'id' => 22,
                'module' => 'Company',
                'description' => 'Company Information',
                'routeUri' => 'company',
                'icon' => 'fa fa-user-o',
                'default_url' => 'company.index',
                'encryptname' => '$2y$10$8zS77.fFHPLAsxIz4e4W7er.P0.2IT4edFNeSiG.Z2tw7AjZQikK6',
                'created_at' => '2022-03-01 06:33:04',
                'updated_at' => '2022-03-02 05:12:21',
            ),
            22 => 
            array (
                'id' => 23,
                'module' => 'OT Adjustment',
                'description' => 'Module for OT records',
                'routeUri' => 'otadjustment',
                'icon' => 'fa fa-user-o',
                'default_url' => 'attendance.otadjustment',
                'encryptname' => '$2y$10$9pOFRH3tJMg6UsPhtowU7.SaWYtnZGXdmDxnkxCyEfteRMXZYdsL6',
                'created_at' => '2022-03-02 10:00:24',
                'updated_at' => '2022-03-31 19:11:36',
            ),
            23 => 
            array (
                'id' => 24,
                'module' => 'Access Control',
                'description' => 'ACCESS ADMIN ONLY',
                'routeUri' => 'access_control_group',
                'icon' => 'fa fa-user-o',
                'default_url' => 'access_controls.group_access',
                'encryptname' => '$2y$10$GlCTZNWpMuR6htANSyQ05unHDJM5EJxM8Se.QfQBOLsgbdDyJxyYe',
                'created_at' => '2022-03-05 05:49:23',
                'updated_at' => '2022-03-05 05:49:23',
            ),
            24 => 
            array (
                'id' => 25,
                'module' => 'SBR File',
                'description' => 'SBR FILE INPUT BY COMPANY BRANCH HR',
                'routeUri' => 'sbr_file',
                'icon' => 'fa fa-user-o',
                'default_url' => 'company.sbr',
                'encryptname' => '$2y$10$EcD5NDsUNmwtcgF9iCgdeFpbv9wXCXnBqqvC5aBncpzqwjWH65WW',
                'created_at' => '2022-03-05 10:15:57',
                'updated_at' => '2022-03-05 10:22:51',
            ),
            25 => 
            array (
                'id' => 26,
                'module' => '13th Month',
                'description' => '13 month view list',
                'routeUri' => 'month13',
                'icon' => 'fa fa-user-o',
                'default_url' => 'payroll.13month',
                'encryptname' => '$2y$10$ZWDnehLQi0J.AYqjFQkrN.TpzVG6aVLXtXKzG7EQo44V2S.5GJo5m',
                'created_at' => '2022-03-25 13:25:55',
                'updated_at' => '2022-04-20 01:09:36',
            ),
            26 => 
            array (
                'id' => 27,
                'module' => 'Import',
                'description' => 'Imports data by admin only',
                'routeUri' => 'import_data',
                'icon' => 'fa fa-user-o',
                'default_url' => 'imports.index',
                'encryptname' => '$2y$10$K4P8DwH9k9SxPCLBZb7uSXumrahfQAV0swnQSqC.pBYh6GkclFy',
                'created_at' => '2022-03-28 10:58:20',
                'updated_at' => '2022-03-28 10:58:20',
            ),
            27 => 
            array (
                'id' => 28,
                'module' => 'Declaration',
                'description' => 'display sss declared',
                'routeUri' => 'declaration',
                'icon' => 'fa fa-user-o',
                'default_url' => 'declaration.sss',
                'encryptname' => '$2y$10$N.YlWjlTETmWZRLqhpDfOOFMFz9YHSLT96QH.V5twMszx2Cxysi',
                'created_at' => '2022-04-08 02:22:39',
                'updated_at' => '2022-04-08 02:23:51',
            ),
            28 => 
            array (
                'id' => 29,
                'module' => 'Distribution',
                'description' => 'Distribution SSS, PH, PG, TAX',
                'routeUri' => 'distribution',
                'icon' => 'fa fa-user-o',
                'default_url' => 'report.distribution',
                'encryptname' => '$2y$10$h.Vjej9uQsepnU.Vo3dfeOq56Uy7suyZ1b6XUW1RdagiUFku4AUqG',
                'created_at' => '2022-04-20 04:41:34',
                'updated_at' => '2022-04-20 04:41:34',
            ),
            29 => 
            array (
                'id' => 30,
                'module' => 'Transfer',
                'description' => 'Transfer Employee member to other company-branch',
                'routeUri' => 'transfer-employee',
                'icon' => 'fa fa-user-o',
                'default_url' => 'transfer.employee',
                'encryptname' => '$2y$10$U82PoA8sCgggsgBGEj4HEOSnjPQqeisKlFVMuXp4OGqOO6CY1d28e',
                'created_at' => '2022-05-01 05:19:49',
                'updated_at' => '2022-05-01 05:19:49',
            ),
            30 => 
            array (
                'id' => 31,
                'module' => 'Routes Assigned',
                'description' => 'Module for Assigning employees to Routes',
                'routeUri' => 'transfer-routes',
                'icon' => 'fa fa-user-o',
                'default_url' => 'transfer.routes',
                'encryptname' => '$2y$10$2G3EK2cbCCFQpzoy1bUE.4VYfvxfAZ6GtssFQ95XdGFj2DrQuCdm',
                'created_at' => '2022-05-01 05:20:56',
                'updated_at' => '2022-05-01 05:20:56',
            ),
            31 => 
            array (
                'id' => 32,
                'module' => 'Bank File',
                'description' => 'Bank Files',
                'routeUri' => 'bankfile',
                'icon' => 'fa fa-user-o',
                'default_url' => 'bank.index',
                'encryptname' => '$2y$10$tssXUAKENKobPleqqGoRMufHqp1hyfWNL8mzN4kF3p2ee56BFHrW',
                'created_at' => '2022-05-07 10:40:57',
                'updated_at' => '2022-05-07 10:40:57',
            ),
            32 => 
            array (
                'id' => 33,
                'module' => 'Account Code',
                'description' => 'Input details',
                'routeUri' => 'account-code',
                'icon' => 'fa fa-user-o',
                'default_url' => 'account.index',
                'encryptname' => '$2y$10$9yrlPweEDSn42Gt40rYX.0vW2zhS9v9HNJ3SzcZ9HnFDY6SgSlnu',
                'created_at' => '2022-05-09 14:49:52',
                'updated_at' => '2022-05-09 14:49:52',
            ),
        ));
        
        
    }
}
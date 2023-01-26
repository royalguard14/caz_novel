<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TrucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('13month')->truncate();
         DB::table('users')->truncate();        
    }
}
    // allowances_list
    //     allowance_type
    //         bank_details
    //         branches
    //         branch_routes
    //             company
    //             companyinfo
    //             deduction_list
    //                 deduction_type
    //                 departments
    //                     employdata
    //                     employee_attendance
    //                         failed_jobs
    //                             hdmf_remittance_data
    //                                 holiday
    //                                     incom
    //                                         jobs
    //                                             job_batches
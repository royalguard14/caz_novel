<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\User;
use DB;
use Hash;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('users')->truncate();    	
    	
		User::insert(array(
			'employee_id' => 'admin19',
			'position_id' => '0',
			'department_id' => '0',
			'first_name'     => 'admin ',
			'middle_name' => 'admin',			
			'last_name' => 'admin',
			'suffix_name' => 'admin',
			'gender' => 'male',
			'civilstatus' => 'married',
			'contact_number' => '09368086909',
			'email_address' => 'near@admin.com',
			'birthday' => '1993-10-1993',
			'address' => 'Taguig City',
			'addedby' => 'first user',
			'sss_id' => '-----',
			'pagibig_id' => '-----',
			'philhealth_id' => '------',			
			'online' => '0',
			'role' => '1',
			'active' => '1',
			
			'username' => 'admin',
			'password' => Hash::make('password')
						
		));



		User::insert(array(

		'employee_id' => 'admin28',
			'position_id' => '0',
			'department_id' => '0',
			'first_name'     => 'Super ',
			'middle_name' => 'admin',			
			'last_name' => 'HR',
			'gender' => 'male',
			'civilstatus' => 'single',
			'contact_number' => '09368086909',
			'email_address' => 'superhr@admin.com',
			'birthday' => '2022-08-28',
			'address' => 'Taguig City',
			'addedby' => 'second user',
			'sss_id' => '-----',
			'pagibig_id' => '-----',
			'philhealth_id' => '------',			
			'online' => '0',
			'role' => '4',
			'active' => '1',
			
			'username' => 'superhr',
			'password' => Hash::make('password@123')
						
		));

        
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');


// DB::table('tax_contribution')->truncate();

// 		DB::statement("INSERT INTO tax_contribution (type,bracket,from_rate,to_rate,PMWT,percentage,compensation_level) VALUES
// 			('daily', 1,0.00,685.00,0,0,0),
// 			('daily', 2,685.01,1095.00,0,0.2,685),
// 			('daily', 3,1096.00,2191.00,82.19,0.25,1096),
// 			('daily', 4,2192.00,5478.00,356.16,0.3,2192),
// 			('daily', 5,5479.00,21917.00,1342.47,0.32,5479),
// 			('daily', 6,21918.00,999999.00,6602.74,0.35,21918),

// 			('weekly', 1,0.00,4808.00,0,0,0),
// 			('weekly', 2,4808.01,7691.00,0,0.2,4808),
// 			('weekly', 3,7692.00,15384.00,576.92,0.25,7692),
// 			('weekly', 4,15385.00,38461.00,2500.00,0.3,15385),
// 			('weekly', 5,38462.00,153845.00,9423.08,0.32,38462),
// 			('weekly', 6,153846.00,999999.00,46346.15,0.35,153846),

// 			('semimonthly', 1,0.00,10417.00,0,0,0),
// 			('semimonthly', 2,10417.01,16666.00,0,0.2,10417),
// 			('semimonthly', 3,16667.00,33332.00,12510.00,0.25,16667),
// 			('semimonthly', 4,33333.00,83332.00,5416.67,0.3,33333),
// 			('semimonthly', 5,83333.00,333332.00,20416.67,0.32,83333),
// 			('semimonthly', 6,333333.00,999999.00,100416.67,0.35,333333),

// 			('monthly', 1,0,20832.00,0.00,0,0),
// 			('monthly', 2,20833.00,33332.00,0.00,0.2,20833),
// 			('monthly', 3,33333.00,666666.00,2500.00,0.25,33333),
// 			('monthly', 4,66667.00,166666.00,10833.33,0.3,66667),
// 			('monthly', 5,166667.00,666666.00,40833.33,0.32,166667),
// 			('monthly', 6,666667.00,999999.00,200833.33,0.35,666667)");
    }
}                                            
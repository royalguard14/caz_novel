<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TaxContributionTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tax_contribution')->delete();
        
        \DB::table('tax_contribution')->insert(array (
            0 => 
            array (
                'id' => 1,
                'type' => 'daily',
                'bracket' => '1',
                'from_rate' => '0.00',
                'to_rate' => '685.00',
                'PMWT' => '0',
                'percentage' => '0',
                'compensation_level' => '0',
            ),
            1 => 
            array (
                'id' => 2,
                'type' => 'daily',
                'bracket' => '2',
                'from_rate' => '685.01',
                'to_rate' => '1095.00',
                'PMWT' => '0',
                'percentage' => '0.2',
                'compensation_level' => '685',
            ),
            2 => 
            array (
                'id' => 3,
                'type' => 'daily',
                'bracket' => '3',
                'from_rate' => '1096.00',
                'to_rate' => '2191.00',
                'PMWT' => '82.19',
                'percentage' => '0.25',
                'compensation_level' => '1096',
            ),
            3 => 
            array (
                'id' => 4,
                'type' => 'daily',
                'bracket' => '4',
                'from_rate' => '2192.00',
                'to_rate' => '5478.00',
                'PMWT' => '356.16',
                'percentage' => '0.3',
                'compensation_level' => '2192',
            ),
            4 => 
            array (
                'id' => 5,
                'type' => 'daily',
                'bracket' => '5',
                'from_rate' => '5479.00',
                'to_rate' => '21917.00',
                'PMWT' => '1342.47',
                'percentage' => '0.32',
                'compensation_level' => '5479',
            ),
            5 => 
            array (
                'id' => 6,
                'type' => 'daily',
                'bracket' => '6',
                'from_rate' => '21918.00',
                'to_rate' => '999999.00',
                'PMWT' => '6602.74',
                'percentage' => '0.35',
                'compensation_level' => '21918',
            ),
            6 => 
            array (
                'id' => 7,
                'type' => 'weekly',
                'bracket' => '1',
                'from_rate' => '0.00',
                'to_rate' => '4808.00',
                'PMWT' => '0',
                'percentage' => '0',
                'compensation_level' => '0',
            ),
            7 => 
            array (
                'id' => 8,
                'type' => 'weekly',
                'bracket' => '2',
                'from_rate' => '4808.01',
                'to_rate' => '7691.00',
                'PMWT' => '0',
                'percentage' => '0.2',
                'compensation_level' => '4808',
            ),
            8 => 
            array (
                'id' => 9,
                'type' => 'weekly',
                'bracket' => '3',
                'from_rate' => '7692.00',
                'to_rate' => '15384.00',
                'PMWT' => '576.92',
                'percentage' => '0.25',
                'compensation_level' => '7692',
            ),
            9 => 
            array (
                'id' => 10,
                'type' => 'weekly',
                'bracket' => '4',
                'from_rate' => '15385.00',
                'to_rate' => '38461.00',
                'PMWT' => '2500.00',
                'percentage' => '0.3',
                'compensation_level' => '15385',
            ),
            10 => 
            array (
                'id' => 11,
                'type' => 'weekly',
                'bracket' => '5',
                'from_rate' => '38462.00',
                'to_rate' => '153845.00',
                'PMWT' => '9423.08',
                'percentage' => '0.32',
                'compensation_level' => '38462',
            ),
            11 => 
            array (
                'id' => 12,
                'type' => 'weekly',
                'bracket' => '6',
                'from_rate' => '153846.00',
                'to_rate' => '999999.00',
                'PMWT' => '46346.15',
                'percentage' => '0.35',
                'compensation_level' => '153846',
            ),
            12 => 
            array (
                'id' => 13,
                'type' => 'semimonthly',
                'bracket' => '1',
                'from_rate' => '0.00',
                'to_rate' => '10417.00',
                'PMWT' => '0',
                'percentage' => '0',
                'compensation_level' => '0',
            ),
            13 => 
            array (
                'id' => 14,
                'type' => 'semimonthly',
                'bracket' => '2',
                'from_rate' => '10417.01',
                'to_rate' => '16666.00',
                'PMWT' => '0',
                'percentage' => '0.2',
                'compensation_level' => '10417',
            ),
            14 => 
            array (
                'id' => 15,
                'type' => 'semimonthly',
                'bracket' => '3',
                'from_rate' => '16667.00',
                'to_rate' => '33332.00',
                'PMWT' => '12510.00',
                'percentage' => '0.25',
                'compensation_level' => '16667',
            ),
            15 => 
            array (
                'id' => 16,
                'type' => 'semimonthly',
                'bracket' => '4',
                'from_rate' => '33333.00',
                'to_rate' => '83332.00',
                'PMWT' => '5416.67',
                'percentage' => '0.3',
                'compensation_level' => '33333',
            ),
            16 => 
            array (
                'id' => 17,
                'type' => 'semimonthly',
                'bracket' => '5',
                'from_rate' => '83333.00',
                'to_rate' => '333332.00',
                'PMWT' => '20416.67',
                'percentage' => '0.32',
                'compensation_level' => '83333',
            ),
            17 => 
            array (
                'id' => 18,
                'type' => 'semimonthly',
                'bracket' => '6',
                'from_rate' => '333333.00',
                'to_rate' => '999999.00',
                'PMWT' => '100416.67',
                'percentage' => '0.35',
                'compensation_level' => '333333',
            ),
            18 => 
            array (
                'id' => 19,
                'type' => 'monthly',
                'bracket' => '1',
                'from_rate' => '0',
                'to_rate' => '20832.00',
                'PMWT' => '0.00',
                'percentage' => '0',
                'compensation_level' => '0',
            ),
            19 => 
            array (
                'id' => 20,
                'type' => 'monthly',
                'bracket' => '2',
                'from_rate' => '20833.00',
                'to_rate' => '33332.00',
                'PMWT' => '0.00',
                'percentage' => '0.2',
                'compensation_level' => '20833',
            ),
            20 => 
            array (
                'id' => 21,
                'type' => 'monthly',
                'bracket' => '3',
                'from_rate' => '33333.00',
                'to_rate' => '666666.00',
                'PMWT' => '2500.00',
                'percentage' => '0.25',
                'compensation_level' => '33333',
            ),
            21 => 
            array (
                'id' => 22,
                'type' => 'monthly',
                'bracket' => '4',
                'from_rate' => '66667.00',
                'to_rate' => '166666.00',
                'PMWT' => '10833.33',
                'percentage' => '0.3',
                'compensation_level' => '66667',
            ),
            22 => 
            array (
                'id' => 23,
                'type' => 'monthly',
                'bracket' => '5',
                'from_rate' => '166667.00',
                'to_rate' => '666666.00',
                'PMWT' => '40833.33',
                'percentage' => '0.32',
                'compensation_level' => '166667',
            ),
            23 => 
            array (
                'id' => 24,
                'type' => 'monthly',
                'bracket' => '6',
                'from_rate' => '666667.00',
                'to_rate' => '999999.00',
                'PMWT' => '200833.33',
                'percentage' => '0.35',
                'compensation_level' => '666667',
            ),
        ));
        
        
    }
}
<?php

use Illuminate\Database\Seeder;

class packagesTableableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	

    	$vcpus = [
    		'1 vCPU',
			'1 vCPU',
			'1 vCPU',
			'2 vCPUs',
			'3 vCPUs',
			'2 vCPUs',
			'4 vCPUs',
			'6 vCPUs',
			'8 vCPUs',
			'12 vCPUs',
			'16 vCPUs',
			'20 vCPUs',
			'24 vCPUs',
			'32 vCPUs'
    	];

    	$ram = [
    		'1 GB',
			'2 GB',
			'3 GB',
			'2 GB',
			'1 GB',
			'4 GB',
			'8 GB',
			'16 GB',
			'32 GB',
			'48 GB',
			'64 GB',
			'96 GB',
			'128 GB',
			'192 GB'
    	];

    	$disk = [
    		'25 GB',
			'50 GB',
			'60 GB',
			'60 GB',
			'60 GB',
			'80 GB',
			'160 GB',
			'320 GB',
			'640 GB',
			'960 GB',
			'1,280 GB',
			'1,920 GB',
			'2,560 GB',
			'3,840 GB'
    	];


    	$linux_price_per_month = [
    		'$5.00',
			'$10.00',
			'$15.00',
			'$15.00',
			'$15.00',
			'$20.00',
			'$40.00',
			'$80.00',
			'$160.00',
			'$240.00',
			'$320.00',
			'$480.00',
			'$640.00',
			'$960.00'
    	];


    	$linux_price_per_year = [
    		'$57.50',
			'$115.00',
			'$172.50',
			'$172.50',
			'$172.50',
			'$230.00',
			'$460.00',
			'$880.00',
			'$1,760.00',
			'$2,640.00',
			'$3,520.00',
			'$5,280.00',
			'$7,040.00',
			'$10,560.00',
    	];

    	$windows_price_per_month = [
    		'$40.00 ',
			'$45.00 ',
			'$50.00 ',
			'$50.00 ',
			'$50.00 ',
			'$55.00 ',
			'$75.00 ',
			'$115.00 ',
			'$195.00 ',
			'$310.00 ',
			'$390.00 ',
			'$585.00 ',
			'$745.00 ',
			'$1,065.00 ',
    	];

    	$windows_price_per_year = [
    		'$460.00',
			'$517.50',
			'$575.00',
			'$575.00',
			'$575.00',
			'$632.50',
			'$862.50',
			'$1,265.00',
			'$2,145.00',
			'$3,410.00',
			'$4,290.00',
			'$6,435.00',
			'$8,195.00',
			'$11,715.00',

    	];


    	$packages = [];
        $x = 0;

        foreach ($vcpus as $index => $value) {
    		$package  = [];
        	$package['order'] = $index +1;
        	$package['vCpu'] = $vcpus[$index];
        	$package['ram'] = $ram[$index];
        	$package['disk'] = $disk[$index];
        	
        	$package['transfer_limit'] = 'unlimited';
        	$package['linux_price_per_month'] = $linux_price_per_month[$index];
        	$package['windows_price_per_month'] = $windows_price_per_month[$index];

        	$package['linux_price_per_year'] = $linux_price_per_year[$index];
        	$package['windows_price_per_year'] = $windows_price_per_year[$index];

            $packages[] = $package;

        }


        // while ( $y < 10) {
        //     $user  = [];
        //     $user['name'] = "client-$y";
            
        //     $packages[] = $user;
        //     $x++;
        // }
        DB::table('packages')->insert($packages);
    }
}

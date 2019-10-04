<?php

use Illuminate\Database\Seeder;

class UserstableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$clients = [];
        $y = 0;
        while ( $y < 10) {
            $user  = [];
            $user['name'] = "client-$y";
            $user['email'] = "client-$y@mail.com";
            $user['password'] = bcrypt('aaazzz121');
            $user['type'] = 'client';
            $clients[] = $user;
            $y++;
        }
        DB::table('users')->insert($clients);
    }
}

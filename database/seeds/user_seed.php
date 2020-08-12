<?php

use Illuminate\Database\Seeder;

class user_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'name' => 'cuong',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('123'),
        ]);
         DB::table('users')->insert([
            'name' => 'tung',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('123'),
        ]);
        
    }
}

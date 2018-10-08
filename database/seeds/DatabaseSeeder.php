<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([

        	'e_mail'=>'admin@gmail.com',
        	'password'=>bcrypt('admin'),
        	'is_admin'=>true




        ]);
    }
}

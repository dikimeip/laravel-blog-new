<?php

use Illuminate\Database\Seeder;
use App\user;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        user::create([
        	'name' => 'Diki Mei P',
        	'email' => 'pm159145@gmail.com',
        	'password' => Hash::make('diki')
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Models\User;
class UserDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
        	'email'=>'admin@gmail.com',
        	'name'=>'admin',
        	'password'=>bcrypt('123456'),
        	'role'=>1
        ]);
    }
}

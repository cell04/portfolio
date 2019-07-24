<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $user = User::create([
            'name'              =>  'Admin',
            'email'             =>  'admin@gmail.com',
            'password'          =>  bcrypt('123456'),
            'mobile_number'     =>  '09090909090',
            'telephone_number'  =>  '4540001'
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                "role_id" => 1,
                "name" => "Rahmat Fauzi widianto",
                "email" => "rahmatfauzi841@gmail.com",
                "age" => 20,
                "gender" => "laki-laki",
                "password" => bcrypt("12345")
            ],
        ];
        
        DB::table('users')->insert($users);
    }
}
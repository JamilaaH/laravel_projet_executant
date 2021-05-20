<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "nom"=>"Hmn",
            "prenom"=>"Jamila",
            "age"=>27,
            "role_id"=>1,
            "avatar_id"=>2,
            "email"=>"jamila@mail.com",
            "password"=>Hash::make('password'),
            "created_at"=>now(),
        ]);
    }
}

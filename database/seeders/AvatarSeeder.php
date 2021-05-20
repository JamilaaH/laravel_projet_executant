<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AvatarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('avatars')->insert([
            ["url"=>"chat.png","nom"=>"chat"],
            ["url"=>"chien.png","nom"=>"chien"],
            ["url"=>"lapin.png", "nom"=>"lapin"],
            ["url"=>"cheval.png", "nom"=>"cheval"],
            ["url"=>"poisson.png", "nom" => "poisson"],
        ]);
    }
}

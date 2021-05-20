<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GalerieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galeries')->insert([
            ["url"=>"photo1.jpg", "categorie_id"=>1],
            ["url"=>"photo2.jpg", "categorie_id"=>3],
            ["url"=>"photo3.jpg" , "categorie_id"=>1],
        ]);
    }
}

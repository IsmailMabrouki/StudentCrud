<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("classes")->insert([
            ["libelle" => "L1"],
            ["libelle" => "L2"],
            ["libelle" => "L3"],
            ["libelle" => "M1"],
            ["libelle" => "M2"],
            ["libelle" => "M3"],
            ["libelle" => "T1"],

        ]);

    
    }
}

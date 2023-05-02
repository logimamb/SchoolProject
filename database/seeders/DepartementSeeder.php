<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("departements")->insert([
            ["nom" => "Mathématiques"],
            ["nom" => "Français"],
            ["nom" => "Comptabilité"],
            ["nom" => "Informatique"],
            ["nom" => "Mécanique"],
            ["nom" => "Anglais"]
        ]);
    }
}

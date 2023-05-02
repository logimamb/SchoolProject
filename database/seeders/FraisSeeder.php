<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FraisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("frais")->insert([
            ["libelle" => "Frais des supports de cours","montant" => 2500,"etudiant_id" => array_rand([1,10],1)],
            ["libelle" => "Frais de réinscription","montant" => 50000,"etudiant_id" => array_rand([1,10],1)],
            ["libelle" => "Frais d'inscription","montant" => 2500,"etudiant_id" => array_rand([1,10],1)]
        ]);
    }
}

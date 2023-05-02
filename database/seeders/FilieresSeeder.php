<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilieresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("filieres")->insert([
            ["nom" =>"Réseaux et Télécommunications","codeFiliere"=>"RT","option_id"=>2],
            ["nom" =>"Licence Téchnologique","codeFiliere"=>"LT","option_id"=>2],
            ["nom" =>"Informatique de Gestion","codeFiliere"=>"IG","option_id"=>2],
            ["nom" =>"Electronique et Maintenace Informatique","codeFiliere"=>"EMI","option_id"=>2],

            ["nom" =>"Maintenance Industrielle","codeFiliere"=>"MI","option_id"=>3],
            ["nom" =>"Instrumentation et Régulation","codeFiliere"=>"IR","option_id"=>3],
            ["nom" =>"Hygiène Sécurité et Environnement","codeFiliere"=>"HSE","option_id"=>3],
            ["nom" =>"Ingéniérie du Pétrole","codeFiliere"=>"IP","option_id"=>3],
            ["nom" =>"Pétrochimie et raffinage","codeFiliere"=>"PC","option_id"=>3],
            ["nom" =>"Technique d'Exploitation Minière","codeFiliere"=>"TEM","option_id"=>3],
            ["nom" =>"Génie civil","codeFiliere"=>"GC","option_id"=>3],

            ["nom" =>"Assurance Banque et Finance","codeFiliere"=>"ABF","option_id"=>1],
            ["nom" =>"Marketing et Action Commerciale","codeFiliere"=>"MAC","option_id"=>1],
            ["nom" =>"Transit et Commerce International","codeFiliere"=>"TCI","option_id"=>1],
            ["nom" =>"Gestion des Ressources Humaines","codeFiliere"=>"GRH","option_id"=>1],
            ["nom" =>"Délégation Médicale","codeFiliere"=>"DM","option_id"=>1],
            ["nom" =>"Sécrétariat Attaché de Direction","codeFiliere"=>"SAD","option_id"=>1],
            ["nom" =>"Comptabilité et Gestion Financière","codeFiliere"=>"CGF","option_id"=>1],
            ["nom" =>"Transport et Logistique","codeFiliere"=>"TL","option_id"=>1]
        ]);
    }
}

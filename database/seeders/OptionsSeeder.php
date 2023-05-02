<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("options")->insert([
            ["nom" => "Commerciale"],
            ["nom" => "Technologique"],
            ["nom" => "Industrielle"]
        ]);
    }
}

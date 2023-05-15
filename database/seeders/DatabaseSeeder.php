<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Diplomes;
use App\Models\DiplomesEnseignants;
use App\Models\DiplomesUsers;
use App\Models\Enseignant;
use App\Models\Enseigner;
use App\Models\Etudiants;
use App\Models\Parcours;
use App\Models\ParcoursEtudiants;
use App\Models\Programme;
use App\Models\User;
use App\Models\UserEnseignants;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(ServicesSeeder::class);
        $this->call(OptionsSeeder::class);
        $this->call(FilieresSeeder::class);
        $this->call(NiveauSeeder::class);
        $this->call(SemestreSeeder::class);
        $this->call(DepartementSeeder::class);
        $this->call(MatiereSeeder::class);
        $this->call(FonctionsSeeder::class);
        $this->call(RoleSeeder::class);

        Diplomes::factory(10)->create();
        Parcours::factory(10)->create();
        User::factory(50)->create();
        Etudiants::factory(10)->create();
        DiplomesUsers::factory(10)->create();
        Enseignant::factory(10)->create();
        DiplomesEnseignants::factory(10)->create();
        Enseigner::factory(10)->create();
        UserEnseignants::factory(5)->create();
        Programme::factory(10)->create();
        ParcoursEtudiants::factory(10)->create();

        //User::find(1)->fonctions()->attach(1);
        User::find(1)->roles()->attach(1);
        // User::find(1)->roles()->attach(3);
        // User::find(1)->roles()->attach(4);
        User::find(2)->roles()->attach(4);
        User::find(2)->roles()->attach(2);
        User::find(3)->roles()->attach(3);
        User::find(4)->roles()->attach(4);
    }
}

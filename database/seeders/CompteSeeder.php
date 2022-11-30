<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Compte;

class CompteSeeder extends Seeder
{
    \App\Models\Compte::factory(1)->create();

        /*
        $this->call([
            PersonnageSeeder::class
        ]);
        */
}

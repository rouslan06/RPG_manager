<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Compte;

class CompteSeeder extends Seeder
{
    \App\Models\Compte::factory(1)->create();

    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            Compte::create([
                'mdp'   =>  Hash::make('mdp'),
                //'remember_token' =>  str_random(10),
            ]);
        }
    }
}

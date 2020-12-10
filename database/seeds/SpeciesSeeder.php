<?php

use Illuminate\Database\Seeder;

class SpeciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('species')->insert([
            [                
                'name' => 'Perro'
            ],
            [                
                'name' => 'Gato'
            ], 
            [                
                'name' => 'Ave'
            ], 
            [                
                'name' => 'Roedor'
            ],             
        ]);
    }
}
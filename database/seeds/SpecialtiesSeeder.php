<?php

use Illuminate\Database\Seeder;

class SpecialtiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('specialties')->insert([
            [                
                'name' => 'Cardiología'
            ],
            [                
                'name' => 'Fisioterapia'
            ], 
            [                
                'name' => 'Ortopedia'
            ], 
            [                
                'name' => 'Dermatología'
            ], 
            [                
                'name' => 'Neurología'
            ], 
            [                
                'name' => 'Oncología'
            ],            
        ]);
    }
}
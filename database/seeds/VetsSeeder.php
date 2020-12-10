<?php

use Illuminate\Database\Seeder;

class VetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vets')->insert([
            [
                'specialty_id'=> 1,
                'name' => 'Juan',
                'last_name' => 'Torres López',
                'address' => 'Las Flores No. 100',
                'telephone' => 8102030,
                'email' => 'juan.torres@gmail.com'
            ],
            [
                'specialty_id'=> 2,
                'name' => 'Ana María',
                'last_name' => 'Ruiz Esparza',
                'address' => 'Las Torres No. 200',
                'telephone' => 8112131,
                'email' => 'ana.ruiz@gmail.com'
            ],
            [
                'specialty_id'=> 3,
                'name' => 'Rodolfo',
                'last_name' => 'Medina Rodríguez',
                'address' => 'Calle Principal No. 120',
                'telephone' => 8122232,
                'email' => 'rodolfo.medina@gmail.com'
            ],
            [
                'specialty_id'=> 4,
                'name' => 'Juana',
                'last_name' => 'Rivera Martínez',
                'address' => 'Revolución Mexicana No. 300',
                'telephone' => 8132333,
                'email' => 'juana.rivera@hotmail.com'
            ],
            [
                'specialty_id'=> 5,
                'name' => 'Luis Felipe',
                'last_name' => 'Baltierra Segovia',
                'address' => 'Amatista No. 1100',
                'telephone' => 8142434,
                'email' => 'luis.baltierra@hotmail.com'
            ],
            [
                'specialty_id'=> 6,
                'name' => 'Vanesa',
                'last_name' => 'Rocha Flores',
                'address' => 'Independencia No. 500',
                'telephone' => 8152535,
                'email' => 'vanesa.rocha@hotmail.com'
            ],
        ]);
    }
}
<?php

namespace Database\Seeders;

use App\Models\Departament;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // MODEL PRODUCTS
        //Departament::factory(10)->create();

        if (!Departament::where('departament_id', '65')->first()){
            Departament::create([
                'departament_id' => '65',
                'dep_description' => 'Padaria',                
            ]);
        }
        if (!Departament::where('departament_id', '38')->first()){
            Departament::create([
                'departament_id' => '38',
                'dep_description' => 'Açougue',                
            ]);
        }
        if (!Departament::where('departament_id', '35')->first()){
            Departament::create([
                'departament_id' => '35',
                'dep_description' => 'Frios',                
            ]);
        }
        if (!Departament::where('departament_id', '32')->first()){
            Departament::create([
                'departament_id' => '32',
                'dep_description' => 'FLV',                
            ]);
        }
    }
}

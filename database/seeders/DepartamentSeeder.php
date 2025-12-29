<?php

namespace Database\Seeders;

use App\Models\Departament;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
                'paginate' => '16',   
            ]);
        }
        if (!Departament::where('departament_id', '38')->first()){
            Departament::create([
                'departament_id' => '38',
                'dep_description' => 'Padaria',  
                'img_url' => 'padaria.png', 
                'dep_texto' => 'Na padaria, o aroma do pão fresco desperta os sentidos logo ao amanhecer. As vitrines
                                estão repletas de doces e salgados, convidando todos a desfrutarem das delícias
                                caseiras. 🥖✨',     
                'paginate' => '16',                     
            ]);
        }
        if (!Departament::where('departament_id', '37')->first()){
            Departament::create([
                'departament_id' => '37',
                'dep_description' => 'Açougue',   
                'img_url' => 'acougue.png',
                'dep_texto' => 'No açougue, cada corte revela a arte, a precisão e o cuidado de quem transforma tradição em sabor. 🥩✨',
                'paginate' => '16',             
            ]);
        }
        if (!Departament::where('departament_id', '35')->first()){
            Departament::create([
                'departament_id' => '35',
                'dep_description' => 'Frios',
                'img_url' => 'frios.png',
                'dep_texto' => 'Na seção de frios, cada fatia carrega frescor, qualidade e o cuidado de quem seleciona sabores 
                                que transformam qualquer refeição em um momento especial. 🧀✨',
                'paginate' => '16',                              
            ]);
        }
        if (!Departament::where('departament_id', '32')->first()){
            Departament::create([
                'departament_id' => '32',
                'dep_description' => 'FLV',
                'img_url' => 'flv.png',
                'dep_texto' => 'Na feirinha, cada banca conta uma história, misturando sabores, cores e sorrisos que transformam 
                                a rotina em encontro e tradição. 🥬✨',
                'paginate' => '40',          
            ]);
        }
    }
}

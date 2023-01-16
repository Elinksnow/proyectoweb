<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\centro_distribucion;
use App\Models\farmacia;
use App\Models\medicamento;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
        $faker = \Faker\Factory::create();

        $this->CrearCentro($faker, 5);

        $this->CrearFarmacia($faker, 10);

        $this->CrearMedicamento($faker, 50);

    }

    private function CrearCentro($faker, $cantidad)
    {

        foreach (range(1,$cantidad) as $index) {

            DB::table('centro_distribucions')->insert([
                'cd_codigo' => $faker->ean8(),
                'cd_direccion' => $faker->secondaryAddress(),
                'cd_telefono' => $faker->numberBetween(962773891, 999999999),
            ]);

        }

        return true;
    }


    private function CrearFarmacia($faker, $cantidad)
    {

        foreach (range(1,$cantidad) as $index) {

            DB::table('farmacias')->insert([
                'farm_nombre' => $faker->firstname(),
                'farm_direccion' => $faker->secondaryAddress(),
                'farm_mail' => $faker->email(),
            ]);

        }

        return true;
    }

    private function CrearMedicamento($faker, $cantidad)
    {

        foreach (range(1,$cantidad) as $index) {

            DB::table('medicamentos')->insert([
                'med_nombre' => $faker->word(),
                'med_compuesto' => $faker->word(),
            ]);

        }
        return true;
    }
}

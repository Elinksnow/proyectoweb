<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\centro_distribucion;

class CentroSeeder extends Seeder
{
    public function run()
    {

        $faker = \Faker\Factory::create();
        $this->CrearPerros($faker, 100);

    }

    private function CrearPerros($faker, $cantidad)
    {

        foreach (range(1,$cantidad) as $index) {
            $api = 'https://dog.ceo/api/breeds/image/random';
            $response = json_decode(file_get_contents($api));
            $fotos = $response->message;

            DB::table('perros')->insert([
                'nombre' => $faker->firstname(),
                'url_foto' => $fotos,
                'descripcion' => $faker->sentence(),
            ]);
        }

        return true;
    }

}
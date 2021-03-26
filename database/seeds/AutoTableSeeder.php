<?php

use Illuminate\Database\Seeder;
use App\Auto;
use Faker\Generator as Faker;

class AutoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++) {
            $auto = new Auto();
            $auto->model_name = $faker->name();
            $auto->cubic_capacity = rand(1000, 2000);
            $auto->max_speed = rand(150, 260);
            $auto->pic = 'https://upload.wikimedia.org/wikipedia/commons/e/ea/Alfa_Romeo_MiTo_1.4_TB_front.JPG';
            $auto->price = rand(1000, 10000);
            $auto->save();
        }

    }
}

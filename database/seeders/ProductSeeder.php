<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 10;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('products')->insert([
                'name' => $faker->name,
                'created' => $faker->datetime,
                'quantity' => $faker->buildingNumber,
                'desc'=> $faker->sentence,
                'price'=>$faker->randomDigitNotZero
            ]);
        }

        DB::table('products')->insert([
            [
            'name'=>'product demo',
            'created'=>'2022-2-2',
            'quantity'=>300,
            'desc'=>'what you know about',
            'price'=>30000.00
            ],
            [
            'name'=>'product demo 2',
            'created'=>'2022-2-3',
            'quantity'=>200,
            'desc'=>'what you know about meeee',
            'price'=>35000.00
            ]
            ]);
    }
}

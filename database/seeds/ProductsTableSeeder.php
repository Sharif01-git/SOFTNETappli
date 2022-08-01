<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i=0; $i < 15; $i++) {
            Product::create([
                'nommat'=> $faker->sentence(2),
                'slug'=>$faker->slug,
                'caractmat'=> $faker->text,
                'prix'=> $faker->numberBetween(10, 500000),
                'image'=>'https://via.placeholder.com/150 C/O https://placeholder.com/ '

            ])->categories()->attach([
                rand(1,4),
            ]);
        }
    }

}

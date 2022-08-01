<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'nom' => 'Ordinateurs',
            'slug' => 'ordinateurs',
        ]);

        Category::create([
            'nom' => 'Smartphones',
            'slug' => 'smartphones',
        ]);

        Category::create([
            'nom' => 'Accessoires',
            'slug' => 'accessoires',
        ]);

        Category::create([
            'nom' => 'Cameras',
            'slug' => 'cameras',
        ]);
    }
}

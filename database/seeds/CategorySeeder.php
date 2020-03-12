<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Category::class)->create([
            'name' => 'Hombres',
            'description' => 'Ropa para hombres'
        ]);
        factory(Category::class)->create([
            'name' => 'Mujeres',
            'description' => 'Ropa para mujeres'
        ]);
    }
}

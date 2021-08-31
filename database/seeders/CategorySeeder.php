<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'category' => 'Classic',
        ]);

        Category::create([
            'category' => 'Anthology',
        ]);

        Category::create([
            'category' => 'Drama',
        ]);

        Category::create([
            'category' => 'Action and Adventure',
        ]);

        Category::create([
            'category' => 'Fiction',
        ]);
    }
}

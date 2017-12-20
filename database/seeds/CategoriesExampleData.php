<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
class CategoriesExampleData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     	Category::create([
     		'name' => 'categories 1'
     	]);
     	Category::create([
     		'name' => 'categories 2'
     	]);

    }
}

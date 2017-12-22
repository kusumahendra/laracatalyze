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
     	Category::create([
     		'name' => 'categories 3'
     	]);
     	Category::create([
     		'name' => 'categories 4'
     	]);
     	Category::create([
     		'name' => 'categories 5'
     	]);
     	Category::create([
     		'name' => 'categories 6'
     	]);

    }
}

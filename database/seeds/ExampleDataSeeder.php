<?php

use Illuminate\Database\Seeder;

class ExampleDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserExampleData::class);
        $this->call(CategoriesExampleData::class);
        $this->call(PostExampleData::class);
        $this->call(TagExampleData::class);
    }
}

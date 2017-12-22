<?php

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagExampleData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([
     		'name' => 'tag 1'
     	]);
     	Tag::create([
     		'name' => 'tag 2'
     	]);
     	Tag::create([
     		'name' => 'tag 3'
     	]);
     	Tag::create([
     		'name' => 'tag 4'
     	]);
     	Tag::create([
     		'name' => 'tag 5'
     	]);
     	Tag::create([
     		'name' => 'tag 6'
     	]);
    }
}

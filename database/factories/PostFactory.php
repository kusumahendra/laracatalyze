<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Post::class, function (Faker $faker) {
    return [
		'title'          => $faker->sentence,
		'user_id'        => App\User::all()->random()->id,
		'category_id'    => App\Models\Category::all()->random()->id,
		'excerpt'        => $faker->paragraph,
		'content'        => $faker->sentence,
		'featured_image' => array_random(['https://placeimg.com/640/480/people','https://placeimg.com/640/480/nature',
			'https://placeimg.com/640/480/animals']),
		'is_featured'	=> $faker->numberBetween(0,1)
    ];
});

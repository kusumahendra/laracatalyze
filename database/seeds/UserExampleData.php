<?php

use Illuminate\Database\Seeder;

class UserExampleData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(App\User::class, 5)->create();
    }
}

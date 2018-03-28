<?php

use Illuminate\Database\Seeder;

class carsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\cars::class, 50)->create()->each(function ($cars) {
            //$u->posts()->save(factory(App\Post::class)->make());
        });
    }
}

<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(faker $faker)
    {
        for ($i = 0; $i < 25; $i++) {
            $new_Post = new Post();

            $new_Post -> user = $faker -> name();
            $new_Post -> title = $faker -> sentence();
            $new_Post -> content = $faker -> text(1000);

            $new_Post -> save();
        }
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Models\Post;
use Faker\Generator as faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $post = new Post();
            $post->title = $faker->sentence(3);
            $post->cover_img = $faker->imageUrl(600, 300, 'Post', true, $post->slug, true);
            $post->creator = $faker->sentence(3);
            /* cos'è sentence?? */
            $post->date_create = $faker->date();
            $post->text_body = $faker->text(500);
            $post->save();
        }
        // mi passo tutti i dati del database creato
        // faccio la migration
    }
}

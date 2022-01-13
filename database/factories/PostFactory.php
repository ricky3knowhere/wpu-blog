<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(5, 10)),
            'slug' => $this->faker->sentence(mt_rand(5, 10)),
            'excerpt' => $this->faker->paragraph(),
            'body' => collect($this->faker->paragraphs(mt_rand(20, 30)))
                ->map(fn ($item) => "<p>$item</p>")->implode(''),
            'user_id' => mt_rand(1, 3),
            'category_id' => mt_rand(1, 3),
        ];
    }
}
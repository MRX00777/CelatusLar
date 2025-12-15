<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(5),
            'content' => $this->faker->paragraphs(3, true),
            'image' => $this->faker->imageUrl(),
            'likes' => random_int(1, 2000),
            'is_published' => true,
            'category_id' => Category::inRandomOrder()->value('id'),
        ];
    }
}

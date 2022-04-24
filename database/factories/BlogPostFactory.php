<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BlogPost>
 */
class BlogPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'blogPostTitle'=>$this->faker->sentence(4,true),
            'blogPostContent'=>$this->faker->text(200),

            'blogPostIsHighlight'=>$this->faker->randomElement(array('0','1')),
        ];
    }
}

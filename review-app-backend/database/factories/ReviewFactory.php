<?php 


namespace Database\Factories;

use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Review::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => function () {
                return \App\Models\User::factory()->create()->id;
            },
            'products_id' => function () {
                return \App\Models\Product::factory()->create()->id;
            },
            'rating' => $this->faker->numberBetween(1, 5),
            'content' => $this->faker->paragraph,
        ];
    }
}

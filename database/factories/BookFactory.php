<?php

namespace Database\Factories;

use App\Models\Book;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;


class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {                
        return [
            'title' => $this->faker->text(30),
            'price' => $this->faker->randomFloat(2, 0, 5000),
            'slug' => $this->faker->unique()->slug,
            'discount' =>  $this->faker->boolean ? $this->faker->numberBetween(1, 100): 0,
            'description' => $this->faker->paragraph,           
            'created_at' => $this->faker->boolean ? now(): now()->subWeeks(40),
            'updated_at' => $this->faker->boolean ? Carbon::now() : null,
            'user_id' => rand(1,2)
        ];
    }
}

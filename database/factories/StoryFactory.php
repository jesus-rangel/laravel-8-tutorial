<?php

namespace Database\Factories;

use App\Models\Story;
use Illuminate\Database\Eloquent\Factories\Factory;

class StoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Story::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => 1,
            'title' => $this->faker->word,
            'body' => $this->faker->paragraph,
            'type' => $this->faker->word,
            'status' => $this->faker->boolean
        ];
    }

    /* protected $fillable = [
        'title', 'body', 'type', 'status'
    ]; */
}

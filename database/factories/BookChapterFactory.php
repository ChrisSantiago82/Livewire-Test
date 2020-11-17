<?php

namespace Database\Factories;

use App\Models\BookChapter;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookChapterFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BookChapter::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'book_id' => null,
            'chapter' => $this->faker->text(40),
        ];
    }
}

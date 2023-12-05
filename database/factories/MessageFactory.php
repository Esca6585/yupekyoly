<?php

namespace Database\Factories;

use App\Models\Message;
use Illuminate\Database\Eloquent\Factories\Factory;

class MessageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Message::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName . ' ' . $this->faker->lastName,
            'phone_number' => $this->faker->e164PhoneNumber,
            'email' => $this->faker->email,
            'messages' => $this->faker->emoji . ' ' . $this->faker->text . ' ' . $this->faker->emoji,
        ];
    }
}

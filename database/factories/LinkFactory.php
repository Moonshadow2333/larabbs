<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Link;
class LinkFactory extends Factory
{
    protected $model = Link::class;

    public function definition()
    {
        return [
            'title' => $this->faker->name,
            'link' => $this->faker->url,
        ];
    }
}

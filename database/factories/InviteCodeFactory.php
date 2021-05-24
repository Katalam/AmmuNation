<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\InviteCode;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class InviteCodeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = InviteCode::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'created_by' => null,
            'used_by' => null,
            'code' => Str::random(5)
        ];
    }
}

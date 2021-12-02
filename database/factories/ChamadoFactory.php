<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ChamadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $users = User::limit(5)->get();

        if(!$users->count())
        {
            throw new \Exception('Não existem usuários cadastrados');
        }

        $user_ids = $users->pluck('id');
        return [
            'titulo'      => "Chamado {$this->faker->sentence}",
            'content'     => Str::random(150),
            'status'      => rand(1, 5),
            'user_id'     => $user_ids->random(),
            'analista_id' => $user_ids->random(),
            'created_by'  => null,
        ];
    }
}

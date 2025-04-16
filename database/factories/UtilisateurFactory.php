<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Utilisateur;

/**
  * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Utilisateur>
 */
class UtilisateurFactory extends Factory
{
    protected $model = Utilisateur::class; // Ajoute cette ligne

    public function definition(): array
    {
        return [
            "email"=> $this->faker->unique()->safeEmail(),
            "password" => bcrypt($this->faker->password(8, 20)), // Hash du mot de passe
        ];
    }
}
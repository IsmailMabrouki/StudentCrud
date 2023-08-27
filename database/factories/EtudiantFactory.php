<?php

namespace Database\Factories;

use App\Models\Etudiant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EtudiantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */



    protected $model = Etudiant::class;

    public function definition(): array
    {
        return [
            'nom' => $this->faker->lastname(),
            'prenom' => $this->faker->firstname(),
            'classe_id' => rand(1, 7)
        ];
    }
}



namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'prenom' => $this->faker->firstName(),
            'email' => $this->faker->unique()->safeEmail(),
            'pays' => $this->faker->country(),
            'telephone' => $this->faker->phoneNumber(),
            'adresse' => $this->faker->address(),
            'experience' => $this->faker->text(),
            'situation_fam' => $this->faker->randomElement(['Célibataire', 'Marié(e)', 'Divorcé(e)', 'Veuf/Veuve']),
            'type_contrat' => $this->faker->randomElement(['CDI', 'CDD', 'Intérim', 'Freelance']),
            'salaire_souhaiter' => $this->faker->randomFloat(2, 1000, 10000),
            'poste_souhaiter' => $this->faker->jobTitle(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}

<?php

namespace Database\Factories;

use App\Models\AbilityUser;
use App\Models\Provider;
use App\Models\ProviderCar;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Sanctum\PersonalAccessToken;

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
            'name' => fake()->name(),
            'mobile' => fake()->numerify('0564######'),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'remember_token' => Str::random(10),
            'account_status' => 1,
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

    public function configure(): static
    {
        return $this->afterCreating(function(User $user){
            if($user->id < 3){
                $abilityRecord = $user->abilities()->save(new AbilityUser([
                    'ability_id' => 1,
                ]));
                $user->access_token = $user->createToken('kdadeltariq',$abilityRecord->ability->abilities)->plainTextToken;
            }
            else if($user->id > 3 && $user->id <= 6){
                $abilityRecord = $user->abilities()->save(new AbilityUser([
                    'ability_id' => 2,
                ]));
                $user->access_token = $user->createToken('kdadeltariq',$abilityRecord->ability->abilities)->plainTextToken;
            }
            else if($user->id > 6 && $user->id <= 9){
                $abilityRecord = $user->abilities()->save(new AbilityUser([
                    'ability_id' => 3,
                ]));
                $user->access_token = $user->createToken('kdadeltariq',$abilityRecord->ability->abilities)->plainTextToken;
            }
            else{
                $abilityRecord = $user->abilities()->save(new AbilityUser([
                    'ability_id' => 4,
                ]));
                $user->access_token = $user->createToken('kdadeltariq',$abilityRecord->ability->abilities)->plainTextToken;
                Provider::factory()->count(1)->for($user)->create();
                ProviderCar::factory()->count(1)->for($user)->create();
            }
            $this->addTokenExpiration($user->access_token);
        });
    }

    private function addTokenExpiration($accessToken)
    {
        $expirationTime = Carbon::now()->addDays(90);
        $personalAccessToken = PersonalAccessToken::findToken($accessToken);
        $personalAccessToken->expires_at = $expirationTime;
        $personalAccessToken->save();
    }
}

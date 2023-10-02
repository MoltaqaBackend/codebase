<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // super admin
        User::factory()->count(2)->create();
        // admin
        User::factory()->count(3)->create();
        // client
        User::factory()->count(3)->create();
    }
}

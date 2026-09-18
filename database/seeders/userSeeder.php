<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::query()->create(['name' => 'Juan V. Casas', 'email' => 'juanvc2010@gmail.com', 'password' => 'doninha']);
    }
}

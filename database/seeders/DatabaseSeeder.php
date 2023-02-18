<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Database\Factories\ProductFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Product::factory(12)->create();

        $user = User::create([
            'name' => 'James Arua',
            'email' => 'dev.sirjames@gmail.com',
            'password' => Hash::make('Password'),
        ]);

        $user->createToken('authToken')->accessToken;
    }
}

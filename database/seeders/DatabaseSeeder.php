<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        if (! User::where('email', 'admin@ximpostach.com.ua')->exists()) {
            User::factory()->create([
                'name' => 'Admin',
                'email' => 'admin@ximpostach.com.ua',
                'password' => Hash::make('password'), // ВАЖЛИВО: можете замінити 'password' на свій пароль
            ]);
        }
    }
}

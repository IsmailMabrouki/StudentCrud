<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use UsersTableSeeder;
use App\Models\Etudiant;
use Illuminate\Database\Seeder;
use Database\Seeders\ClassesTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //  \App\Models\User::factory(10)->create();
        Etudiant::Factory(30)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // $this->call(ClassesTableSeeder::class);

    }
}

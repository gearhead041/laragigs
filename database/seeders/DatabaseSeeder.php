<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Listing;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            "name"=> "John Doe",
            "email" => "email@example.com"
        ]);

        Listing::factory(6)->create([
            "user_id"=> $user->id,
        ]);
    }
}

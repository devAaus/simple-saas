<?php

namespace Database\Seeders;

use App\Models\Feature;
use App\Models\Package;
use App\Models\User;
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

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Feature::create([
            'image' => 'https://www.iconpacks.net/icons/2/free-plus-icon-3107-thumb.png',
            'route_name' => 'feature1.index',
            'name' => 'Calculate Sum',
            'description' => 'Calcultae sum of two numbers',
            'required_credits' => '1',
            'active' => true,
        ]);

        Feature::create([
            'image' => 'https://www.iconpacks.net/icons/2/free-minus-icon-3108-thumb.png',
            'route_name' => 'feature2.index',
            'name' => 'Calculate Difference',
            'description' => 'Calcultae difference of two numbers',
            'required_credits' => '3',
            'active' => true,
        ]);

        Package::create([
            'name' => 'Basic',
            'price' => '5',
            'credits' => '20',
        ]);

        Package::create([
            'name' => 'Silver',
            'price' => '10',
            'credits' => '50',
        ]);

        Package::create([
            'name' => 'Gold',
            'price' => '20',
            'credits' => '200',
        ]);
    }
}

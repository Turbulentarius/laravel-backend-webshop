<?php

namespace Database\Seeders;

use App\Models\Drink;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DrinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Drink::create([
            'title' => 'Frosty Cola',
            'description' => 'Chills your soul. Fizzes with regret.',
            'price' => 24.95
        ]);
    
        Drink::create([
            'title' => 'Goblin Juice',
            'description' => 'Unclear origin. Slightly radioactive.',
            'price' => 14.50
        ]);
    
        Drink::create([
            'title' => 'Brew of Eternal Debugging',
            'description' => 'Helps you find that one bug from last week.',
            'price' => 29.99
        ]);
    }
}

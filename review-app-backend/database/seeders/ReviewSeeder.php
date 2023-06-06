<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\Factory; // Importez la classe Factory

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Review::factory()->count(50)->create(); // Utilisez la méthode factory() de la classe Factory
    }
}

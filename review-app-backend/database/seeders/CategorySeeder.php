<?php 
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Category::create([
        //     'name' => 'Category 1',
        //     'description' => 'Description 1',
        // ]);

        // Category::create([
        //     'name' => 'Category 2',
        //     'description' => 'Description 2',
        // ]);
        Category::factory(10)->create();
    }
}

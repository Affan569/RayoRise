<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Track Suits'],
            ['name' => 'Track Jackets'],
            ['name' => 'Track Pants'],
        ];

        foreach ($categories as $cat) {
            Category::create($cat);
        }
    }
}

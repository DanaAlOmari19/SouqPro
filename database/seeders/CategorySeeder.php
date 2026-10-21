<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
        [
            'name' => 'Clotes',
            'slug' => 'clotes',
            'is_active' => true,
            'description' => '----',
        ],
        [
            'name' => 'Ilectroic',
            'slug' => 'ilectroic',
            'is_active' => true,
        ],
        [
            'name' => 'Books',
            'slug' => 'books',
        ],
    ];

    foreach ($categories as $category) {
    Category::create(
        array_merge($category, [
            'slug' => Str::slug($category['name'])
        ])
    );
}
    }
}

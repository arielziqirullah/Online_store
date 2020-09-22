<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Apple',
                'slug' => 'apple'
            ],
            [
                'name' => 'Samsung',
                'slug' => 'samsung'
            ],
            [
                'name' => 'Asus',
                'slug' => 'asus'
            ],
            [
                'name' => 'Xiaomi',
                'slug' => 'xiaomi'
            ],
            [
                'name' => 'Google',
                'slug' => 'google'
            ],
            [
                'name' => 'Realme',
                'slug' => 'realme'
            ],
            [
                'name' => 'Oppo',
                'slug' => 'oppo'
            ],
            [
                'name' => 'Vivo',
                'slug' => 'vivo'
            ],
            [
                'name' => 'Entry level',
                'slug' => 'entry-level'
            ],
            [
                'name' => 'Mid Range',
                'slug' => 'mid-range'
            ],
            [
                'name' => 'Flasgship',
                'slug' => 'flagship'
            ],
        ];

        Category::insert($categories);
    }
}

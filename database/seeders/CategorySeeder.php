<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $man = Category::create([
            'image' => 'img/men.jpg',
            'thumbnail' => null,
            'cat_ust' => null,
            'name' =>'Erkek',
            'content' => 'Erkek Giyim',
            'status' => '1'
        ]);

        Category::create([
            'image' => null,
            'thumbnail' => null,
            'cat_ust' => $man->id,
            'name' =>'Erkek Kazak',
            'content' => 'Erkek Kazaklar',
            'status' => '1'
        ]);

        Category::create([
            'image' => null,
            'thumbnail' => null,
            'cat_ust' => $man->id,
            'name' =>'Erkek Pantolon',
            'content' => 'Erkek Pantolonlar',
            'status' => '1'
        ]);

        $woman = Category::create([
            'image' => 'img/women.jpg',
            'thumbnail' => null,
            'cat_ust' => null,
            'name' =>'Kadın',
            'content' => 'Kadın Giyim',
            'status' => '1'
        ]);

        Category::create([
            'image' => null,
            'thumbnail' => null,
            'cat_ust' => $woman->id,
            'name' =>'Kadın Çanta',
            'content' => 'Kadın Çantalar',
            'status' => '1'
        ]);

        Category::create([
            'image' => null,
            'thumbnail' => null,
            'cat_ust' => $woman->id,
            'name' =>'Kadın Pantolon',
            'content' => 'Kadın Pantolonlar',
            'status' => '1'
        ]);

        $kids = Category::create([
            'image' => 'img/children.jpg',
            'thumbnail' => null,
            'cat_ust' => null,
            'name' =>'Çocuk',
            'content' => 'Çocuk Giyim',
            'status' => '1'
        ]);

        Category::create([
            'image' => null,
            'thumbnail' => null,
            'cat_ust' => $kids->id,
            'name' =>'Çocuk Oyuncaklar',
            'content' => 'Çocuk Oyuncaklar',
            'status' => '1'
        ]);

        Category::create([
            'image' => null,
            'thumbnail' => null,
            'cat_ust' => $kids->id,
            'name' =>'Çocuk Pantolon',
            'content' => 'Çocuk Pantolonlar',
            'status' => '1'
        ]);
    }
}

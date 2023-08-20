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
            'image' => null,
            'thumbnail' => null,
            'cat_ust' => null,
            'name' =>'Erkek',
            'content' => 'Erkek Giyim',
            'status' => '1'
        ]);

        $woman = Category::create([
            'image' => null,
            'thumbnail' => null,
            'cat_ust' => null,
            'name' =>'Kadın',
            'content' => 'Kadın Giyim',
            'status' => '1'
        ]);

        $kids = Category::create([
            'image' => null,
            'thumbnail' => null,
            'cat_ust' => null,
            'name' =>'Çocuk',
            'content' => 'Çocuk Giyim',
            'status' => '1'
        ]);
    }
}

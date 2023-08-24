<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Urun 1',
            'image' => 'images/cloth_1.jpg',
            'cetegory_id' => 1,
            'short_text' => 'Kısabilgi',
            'price' => 100,
            'size' => 'small',
            'color' => 'Beyaz',
            'piece' => 10,
            'status' => '1',
            'content' => '<p>ürün harika</p>',
        ]);

        Product::create([
            'name' => 'Urun 2',
            'image' => 'images/cloth_2.jpg',
            'cetegory_id' => 2,
            'short_text' => 'Kısabilgi 2',
            'price' => 150,
            'size' => 'Large',
            'color' => 'Siyah',
            'piece' => 5,
            'status' => '1',
            'content' => '<p>ürünler efsane</p>',
        ]);
    }
}

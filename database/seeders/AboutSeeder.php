<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([

            'name'=> 'E-Commerce',
            'content' => 'Hakkımızda yazısı',
            'text_1_icon'=> 'Icon Truck',
            'text_1' => 'HIZLI KARGO',
            'text_1_content' => "Beğendiğiniz ürünleri Türkiye'nin her yerine ulaştırıyoruz.",
            'text_2_icon' => 'Icon Refresh',
            'text_2' => 'KOLAY GERİ İADE',
            'text_2_content' => "30 gün içinde dilediğinzi zaman iade imkanı sağlanır.",
            'text_3_icon' => 'Icon Help',
            'text_3' => "DESTEK",
            'text_3_content' => "7/24 bize ulaşabilirsiniz.",
        ]);
    }
}

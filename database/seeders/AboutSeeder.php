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
            'text_1_icon'=> 'icon-truck',
            'text_1' => 'HIZLI KARGO',
            'text_1_content' => "Beğendiğiniz ürünleri Türkiye'nin her yerine ulaştırıyoruz.",
            'text_2_icon' => 'icon-refresh2',
            'text_2' => 'KOLAY GERİ İADE',
            'text_2_content' => "30 gün içinde dilediğinzi zaman iade imkanı sağlanır.",
            'text_3_icon' => 'icon-help',
            'text_3' => "DESTEK",
            'text_3_content' => "7/24 bize ulaşabilirsiniz.",
        ]);
    }
}

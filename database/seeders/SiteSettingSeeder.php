<?php

namespace Database\Seeders;

use App\Models\SiteSettings;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SiteSettings::create([
            'name' => 'adres',
            'data' => 'kayseri adres bilgileri'
        ]);

        SiteSettings::create([
            'name' => 'phone',
            'data' => '+9055555555'
        ]);

        SiteSettings::create([
            'name' => 'email',
            'data' => 'test@test.com'
        ]);

        SiteSettings::create([
            'name' => 'harita',
            'data' => null
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Imagen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagenesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $imagenes = [
            'https://i.postimg.cc/2yYMZWyB/1.jpg',
            'https://i.postimg.cc/VvFTBN0Z/2.jpg',
            'https://i.postimg.cc/pVQgtscQ/3.jpg',
            'https://i.postimg.cc/sDVbf5bk/4.jpg',
            'https://i.postimg.cc/kXfz2BmB/5.jpg',
            'https://i.postimg.cc/wjMPLgqF/6.jpg',
            'https://i.postimg.cc/TwMHzbrH/7.jpg',
            'https://i.postimg.cc/YCPPxZj7/8.jpg',
            'https://i.postimg.cc/HxwPdLzW/9.jpg',
            'https://i.postimg.cc/zfRc27Rg/10.webp',
            'https://i.postimg.cc/L6CQHwtP/11.jpg',
            'https://i.postimg.cc/BZCwzXtM/12.jpg',
            'https://i.postimg.cc/vTG2Bd2r/13.jpg',
            'https://i.postimg.cc/KjQq3sCd/14.jpg',
            'https://i.postimg.cc/L660F21R/15.jpg',
            'https://i.postimg.cc/cLv96hhb/16.jpg',
            'https://i.postimg.cc/FHwPSSns/17.jpg',
            'https://i.postimg.cc/wvYgw739/18.jpg',
            'https://i.postimg.cc/BvDmBvd5/19.jpg',
            'https://i.postimg.cc/267TgKjV/20.jpg',
            'https://i.postimg.cc/4dgBLggD/21.jpg',
            'https://i.postimg.cc/L5yD8g1S/22.jpg',
            'https://i.postimg.cc/1XRMSr4M/23.jpg',
            'https://i.postimg.cc/5N0pkgh2/24.jpg',
            'https://i.postimg.cc/pVkqZ41S/25.jpg',
            'https://i.postimg.cc/Hsh3G5m4/26.jpg',
            'https://i.postimg.cc/RZJdvFVr/27.jpg',
            'https://i.postimg.cc/1zxHXQf8/28.jpg',
            'https://i.postimg.cc/zfnkRcg0/29.jpg',
            'https://i.postimg.cc/wvgQ5Q5H/30.jpg',
            'https://i.postimg.cc/tJgdwRmM/31.jpg',
            'https://i.postimg.cc/769MKJXz/32.jpg',
            'https://i.postimg.cc/Y0yNHc5q/33.jpg',
            'https://i.postimg.cc/bNW0Vh0m/34.jpg',
            'https://i.postimg.cc/NGNkTTKq/35.jpg',
            'https://i.postimg.cc/13FGLjJs/36.jpg',
            'https://i.postimg.cc/QxHkqt7B/37.jpg',
            'https://i.postimg.cc/d0K2vjxd/38.jpg',
        ];

        foreach ($imagenes as $index => $url) {
            DB::table('imagens')->insert([
                'Url' => $url,
                'id' => $index + 1,
            ]);
        }
    }
}

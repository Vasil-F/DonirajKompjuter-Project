<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('partners')->insert([

            ['name' => 'Neptun',
             'image' => 'https://www.neptun.mk//content/images/logo-modal.jpg',
             'link' => 'https://www.neptun.mk/',
             'type' => 'Official'],
            ['name' => 'Apple',
             'image' => 'https://yt3.googleusercontent.com/ytc/AGIKgqNoNRD8Y7-ydomwccOXCRsrtM3SVG1veHCKxN5IOg=s900-c-k-c0x00ffffff-no-rj',
             'link' => 'https://www.apple.com/mk/',
             'type' => 'International'],
            ['name' => 'Triglav osiguruvanje',
             'image' => 'https://pari.com.mk/wp-content/uploads/2020/10/triglav-logo-2.jpg',
             'link' => 'https://www.triglav.mk/',
             'type' => 'Regional'],
            ['name' => 'Silk road bank',
             'image' => 'https://pari.com.mk/wp-content/uploads/2020/10/Silk-road-banka-1-e1579859283917-1.jpg',
             'link' => 'https://silkroadbank.com.mk/',
             'type' => 'Regional'],
             ['name' => 'Anhoch',
             'image' => 'https://s.vrabotuvanje.com.mk/data/images/preview/article/57/e51c3b75-resize-820x0x100.jpg',
             'link' => 'https://www.anhoch.com/',
             'type' => 'Official'],
            ['name' => 'Microsoft',
             'image' => 'https://www.respectability.org/wp-content/uploads/2017/10/Microsoft-logo.jpg',
             'link' => 'https://www.microsoft.com/en-us/',
             'type' => 'International'],
        ]);
    }
}

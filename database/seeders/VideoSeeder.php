<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('videos')->insert([
        [ 
          'image' => 'https://lh3.googleusercontent.com/hwau7OVWx96XaME5KpRuJ0I_MscrerK6SbRH1UwYHYaxIDQQtn7RZK02LDSfBzCreidFgDsJeXyqDct6EZiH6vsV=w640-h400-e365-rj-sc0x00ffffff',
          'link' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley',
        ],
        [ 
          'image' => 'https://lh3.googleusercontent.com/hwau7OVWx96XaME5KpRuJ0I_MscrerK6SbRH1UwYHYaxIDQQtn7RZK02LDSfBzCreidFgDsJeXyqDct6EZiH6vsV=w640-h400-e365-rj-sc0x00ffffff',
          'link' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley',
        ],
        [ 
          'image' => 'https://lh3.googleusercontent.com/hwau7OVWx96XaME5KpRuJ0I_MscrerK6SbRH1UwYHYaxIDQQtn7RZK02LDSfBzCreidFgDsJeXyqDct6EZiH6vsV=w640-h400-e365-rj-sc0x00ffffff',
          'link' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley',
        ],
        [ 
          'image' => 'https://lh3.googleusercontent.com/hwau7OVWx96XaME5KpRuJ0I_MscrerK6SbRH1UwYHYaxIDQQtn7RZK02LDSfBzCreidFgDsJeXyqDct6EZiH6vsV=w640-h400-e365-rj-sc0x00ffffff',
          'link' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley',
        ],
    ]);
    }
}

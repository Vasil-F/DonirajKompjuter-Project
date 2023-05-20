<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('blogs')->insert([

            ['title' => 'General knowledge on python',
             'image' => 'https://zenskimagazin.mk/media/main/2021/08/20210809151426.jpg',
             'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis doloremque amet culpa error a nesciunt rem dolores nostrum minima inventore, tenetur, vitae ea harum, modi saepe obcaecati et corporis perferendis.',
             'category' => 'Science'],
            ['title' => 'Overworking on weekends',
             'image' => 'https://zenskimagazin.mk/media/main/2021/08/20210809151426.jpg',
             'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis doloremque amet culpa error a nesciunt rem dolores nostrum minima inventore, tenetur, vitae ea harum, modi saepe obcaecati et corporis perferendis.',
             'category' => 'General'],
            ['title' => 'The EU laws ban 3rd country citizens',
             'image' => 'https://zenskimagazin.mk/media/main/2021/08/20210809151426.jpg',
             'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis doloremque amet culpa error a nesciunt rem dolores nostrum minima inventore, tenetur, vitae ea harum, modi saepe obcaecati et corporis perferendis.',
             'category' => 'Politics'],
            ['title' => 'Find your best form of fun',
             'image' => 'https://zenskimagazin.mk/media/main/2021/08/20210809151426.jpg',
             'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis doloremque amet culpa error a nesciunt rem dolores nostrum minima inventore, tenetur, vitae ea harum, modi saepe obcaecati et corporis perferendis.',
             'category' => 'Entertainment'],
        ]);
    }
}

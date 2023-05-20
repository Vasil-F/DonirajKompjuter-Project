<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ComputerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('computers')->insert([
            ['type' => 'Laptop'],
            ['type' => 'PC'],
            ['type' => 'Notebook'],
            ['type' => 'Tablet'],
            ['type' => 'Equipment']
        ]);
    }
}

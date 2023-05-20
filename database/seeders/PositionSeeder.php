<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $position1 = new Position();
        $position1->name = 'Position 1';
        $position1->save();
       
        $position2 = new Position();
        $position2->name = 'Position 2';
        $position2->save();
        
        $position3 = new Position();
        $position3->name = 'Position 3';
        $position3->save();
    }
}

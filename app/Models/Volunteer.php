<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    use HasFactory;

    public function position()
    {
        $this->belongsTo(Position::class);
    }

    public function status()
    {
        $this->belongsTo(Status::class);
    }
}

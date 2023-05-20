<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    public function status()
    {
        $this->belongsTo(Status::class);
    }

    public function computer()
    {
        $this->belongsTo(Computer::class);
    }
}

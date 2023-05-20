<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class Partner extends Model
{
    use HasFactory;

    public function type()
    {
        $this->belongsTo(Type::class);
    }
}

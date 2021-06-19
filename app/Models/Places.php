<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Places extends Model
{
    use HasFactory;
    public function places()
    {
        return $this->belongsTo(Voyage::class);
    }
}

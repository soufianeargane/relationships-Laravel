<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Processor extends Model
{
    use HasFactory;

    public function desktop()
    {
        return $this->belongsTo(Desktop::class, 'desktop_id');
    }
}

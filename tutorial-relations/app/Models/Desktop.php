<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desktop extends Model
{
    use HasFactory;

    public function processor()
    {
        return $this->hasOne(Processor::class, 'desktop_id');
    }
}

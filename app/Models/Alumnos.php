<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Alumnos extends Model
{
    use HasFactory;
    
    public function carreras():BelongsTo{
        return $this->belongsTo(Carreras::class());
    }
}

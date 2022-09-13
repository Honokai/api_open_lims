<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SubSample extends Model
{
    use HasFactory;

    public function sample(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Sample::class);
    }
}

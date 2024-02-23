<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Album extends Model
{
    use HasFactory;
    protected $table = 'album';
    protected $primaryKey = 'albumId';
    protected $guarded = ['albumId'];
    public $timestamps = false;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'userId');
    }

    public function foto(): HasMany
    {
        return $this->hasMany(Foto::class, 'albumId');
    }
}

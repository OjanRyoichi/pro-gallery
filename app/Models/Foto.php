<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Foto extends Model
{
    use HasFactory;
    protected $table = 'foto';
    protected $primaryKey = 'fotoId';
    protected $guarded = ['fotoId'];
    public $timestamps = false;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'userId', 'userId');
    }

    public function album(): BelongsTo
    {
        return $this->belongsTo(Album::class, 'albumId', 'albumId');
    }


}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chamado extends Model
{
    use HasFactory;

    protected $fillable     = [
        'titulo',
        'content',
        'status',
        'user_id',
        'analista_id',
        'created_by',
    ];

    /**
     * Obtem o usuario do Chamado
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Obtem o analista do Chamado
     */
    public function analista(): BelongsTo
    {
        return $this->belongsTo(User::class, 'analista_id');
    }

    /**
     * Quem abriu do Chamado
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

}

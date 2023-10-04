<?php

namespace App\Models;

use App\Traits\ModelTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Wallet extends Model
{
    use ModelTrait;
    protected $casts = [
        'data' => 'array',
    ];
    protected $fillable = [
        'type', 'transaction_reasons', 'transaction_type',
        'current', 'steps', 'balance', 'data'];


    # Relations
    public function wallettable(): MorphTo
    {
        return $this->morphTo();
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'wallettable_id', 'id');
    }
}

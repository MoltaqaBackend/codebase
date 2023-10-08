<?php

namespace App\Models;

use App\Traits\ModelTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Transaction extends Model
{
    use ModelTrait;


    protected $guarded = [];

    protected $casts = [
        'data' => 'array',
        'pay_data' => 'array',
        'pay_at' => 'timestamp',
    ];

    # Relations
    public function transactionable(): MorphTo
    {
        return $this->morphTo();
    }


}

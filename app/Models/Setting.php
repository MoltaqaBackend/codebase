<?php

namespace App\Models;

use App\Traits\ModelTrait;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use ModelTrait;

    protected $casts = [
        'value' => 'array',
    ];
    protected $guarded = [];
}

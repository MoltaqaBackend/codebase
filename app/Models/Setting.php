<?php

namespace App\Models;

use App\Traits\ModelTrait;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Setting extends Model implements HasMedia
{
    use ModelTrait;
    use InteractsWithMedia;

    protected $casts = [
        'value' => 'array',
    ];
    protected $guarded = [];
}

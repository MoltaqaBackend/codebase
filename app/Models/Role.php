<?php

namespace App\Models;

use App\Traits\ModelTrait;
use Spatie\Translatable\HasTranslations;

class Role extends \Spatie\Permission\Models\Role
{
    use ModelTrait;

    use HasTranslations;
    public $translatable = ['name'];

    public const DEFAULT_ROLE_SUPER_ADMIN = 'admin';
    public const DEFAULT_ROLE_CLIENT = 'client';


    protected array $filters = [
        'keyword',
    ];

    protected function asJson($value)
    {
        return json_encode($value, JSON_UNESCAPED_UNICODE);
    }



    # public array $definedRelations = [];


    public function scopeOfKeyword($query, $keyword)
    {
        $columns = implode(',', $this->searchable ?? []);

        if (empty($keyword) || empty($columns)) {
            return $query;
        }

        return $query->whereRaw("CONCAT_WS(' ', {$columns}) like '%{$keyword}%'");
    }
}

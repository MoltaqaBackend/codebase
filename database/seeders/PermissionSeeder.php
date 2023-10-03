<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PermissionSeeder extends Seeder
{
    protected static mixed $abilities;
    protected static mixed $models;
    protected static mixed $permissions;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('permissions')->truncate();
        foreach (self::defaultPermissions() as $perm) {
            DB::table('permissions')->insert($perm);
        }
    }

    
    public static function defaultPermissions(): array
    {
        self::$permissions = [];
        self::$abilities = collect(['create', 'read', 'update', 'delete']);
        $modelFiles = Storage::disk('app')->files('Models');
        self::$models = collect($modelFiles)->map(function ($modelFile) {
            $model = str_replace('.php', '', $modelFile);
            $model = str_replace('Models/', '', $model);
            $modelClass = 'App\\Models\\' . str_replace('/', '\\', $model);
            self::$abilities->map(function ($ability) use ($model) {
                $perm = $ability . Str::lower(implode('_', preg_split('/(?=[A-Z])/', $model)));
                self::$permissions[] = [
                    'name' => $perm,
                    'model' => $model,
                    'guard_name' => 'sanctum',
                ];
            });
            
        });
        return self::$permissions;
    }
}

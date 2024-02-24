<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Storage;
use Knuckles\Camel\Extraction\ExtractedEndpointData;
use Knuckles\Scribe\Scribe;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        # Scribe config
        # Matche laravel url schema
        Scribe::normalizeEndpointUrlUsing(fn($url) => $url);
        Scribe::beforeResponseCall(function (Request $request, ExtractedEndpointData $endpointData) {
            # add api key to try it page
            $apiKey = json_decode(Storage::disk('local')->get('api_key.json'), true);
            $request->headers->set("Api-Key", $apiKey['api_key']);
            # Uncomment if you would like to add token to try it page
//            $token = json_decode(Storage::disk('local')->get('scribe_token.json'), true);
//            if (is_null($token)) {
//                $token['token'] = User::query()->first()->createToken('codebase', ['scribe'],now()->addDays(30))->plainTextToken;
//                Storage::disk('local')->put('scribe_token.json', json_encode($token));
//            }
//            $token = $token['token'];
//            $request->headers->set("Authorization", "Bearer $token");
//            $request->server->set("HTTP_AUTHORIZATION", "Bearer $token");
        });
        # Eloquent Uncomment if you would like to run app in strict mode
//        Model::shouldBeStrict();
        # Telescope
        if ($this->app->isProduction()) {
            if (config('global.TELESCOPE_PRODUCTION', false)) {
                $this->registerTelescope();
            }
        } else {
            $this->registerTelescope();
        }

        Paginator::useBootstrap();
        Schema::defaultStringLength(191);
        //date_default_timezone_set(Config::get('app.timezone', 'Africa/Cairo'));

        # Enforce Morph Modela
        $modelFiles = Storage::disk('app')->files('Models');
        foreach ($modelFiles as $modelFile) {
            $model = str_replace('.php', '', $modelFile);
            $model = str_replace('Models/', '', $model);
            $modelClass = 'App\\Models\\' . str_replace('/', '\\', $model);
            Relation::enforceMorphMap([
                "$model" => "$modelClass"
            ]);
        }

        /**
         * Paginate a standard Laravel Collection.
         *
         * @param int $perPage
         * @param int $total
         * @param int $page
         * @param string $pageName
         * @return array
         */
        Collection::macro('customPaginate', function ($perPage, $total = null, $page = null, $pageName = 'page') {
            $page = $page ?: LengthAwarePaginator::resolveCurrentPage($pageName);
            return new LengthAwarePaginator(
                $this->forPage($page, $perPage),
                $total ?: $this->count(),
                $perPage,
                $page,
                [
                    'path' => LengthAwarePaginator::resolveCurrentPath(),
                    'pageName' => $pageName,
                ]
            );
        });
    }

    private function registerTelescope(): void
    {
        $this->app->register(\Laravel\Telescope\TelescopeServiceProvider::class);
        $this->app->register(TelescopeServiceProvider::class);
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Laravel\Telescope\IncomingEntry;
use Laravel\Telescope\Telescope;
use Laravel\Telescope\TelescopeApplicationServiceProvider;

class TelescopeServiceProvider extends TelescopeApplicationServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        if ($this->app->isProduction()) {
            if (config('global.TELESCOPE_PRODUCTION', false)) {
                $this->gate();
            }
        }
//         Telescope::night();

        $this->hideSensitiveRequestDetails();

        Telescope::filter(function (IncomingEntry $entry) {

            if ($this->app->isProduction()) {
                if (config('global.TELESCOPE_PRODUCTION', false)) {
                    return true;
                }
            }

            if ($this->app->environment('local') || $this->app->environment('staging')) {
                return true;
            }

            return $entry->isReportableException() ||
                $entry->isFailedRequest() ||
                $entry->isFailedJob() ||
                $entry->isScheduledTask() ||
                $entry->hasMonitoredTag();
        });
    }

/**
     * Prevent sensitive request details from being logged by Telescope.
     */
protected function hideSensitiveRequestDetails(): void
{
    if ($this->app->isProduction()) {
        if (config('global.TELESCOPE_PRODUCTION', false)) {
            return;
        }
    }

        if ($this->app->environment('local') || $this->app->environment('staging')) {
            return;
        }

        Telescope::hideRequestParameters(['_token']);

        Telescope::hideRequestHeaders([
            'cookie',
            'x-csrf-token',
            'x-xsrf-token',
        ]);
}

/**
     * Register the Telescope gate.
     *
     * This gate determines who can access Telescope in non-local environments.
     */
protected function gate(): void
{
    if (config('global.TELESCOPE_PRODUCTION', false)) {
        Gate::define('viewTelescope', function ($user) {
            return true;
        });
    } else {
        Gate::define('viewTelescope', function ($user) {
            return in_array($user->email, [
                "dev@moltaqa.net"
                ]);
        });
    }
}

/**
     * Configure the Telescope authorization services.
     *
     * @return void
     */
protected function authorization(): void
{
    $this->gate();
    Telescope::auth(function ($request) {
        if (config('global.TELESCOPE_PRODUCTION', false)) {
            return $this->app->isProduction() ||
                    Gate::check('viewTelescope', [$request->user()]);
        }else{
            return $this->app->environment('local') ||
                    Gate::check('viewTelescope', [$request->user()]);
        }
    });
}
}

<?php
namespace App\Providers;

use Belt;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

/**
 * @belt
 *
 * Class ComposerServiceProvider
 * @package App\Providers
 */
class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('belt-convo::layouts.shared.partials.alerts', Belt\Convo\Http\ViewComposers\AlertsComposer::class);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

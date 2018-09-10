<?php
namespace Atamohsin\LumenRouteList;

use Illuminate\Support\ServiceProvider;

class RouteCmdServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands('Atamohsin\LumenRouteList\RouteCommand');
    }
}
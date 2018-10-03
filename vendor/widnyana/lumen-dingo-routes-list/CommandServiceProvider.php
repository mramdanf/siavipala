<?php
namespace Widnyana\LDRoutesList;


use Illuminate\Support\ServiceProvider;

class CommandServiceProvider extends ServiceProvider
{

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands(CommandProvider::class);
    }
}

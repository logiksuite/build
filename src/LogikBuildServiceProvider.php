<?php

namespace LogikSuite\Build;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;
use LogikSuite\Build\Console\ServeBuildCommand;

class LogikBuildServiceProvider extends ServiceProvider
{

    protected $commands = [
        ServeBuildCommand::class
    ];

    public function boot()
    {

        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'logikbuild');

        /*$this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/logiksuite/build'),
        ]);*/

        $this->publishes([
            __DIR__ . '/../../../tabler/tabler/dist' => public_path('logikbuild/assets/@tabler'),
            __DIR__ . '/../public/logikbuild/assets' => public_path('logikbuild/assets'),
            __DIR__ . '/../public/logikbuild' => public_path('logikbuild'),
        ], 'logiksuite-build');
    }


    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->commands($this->commands);
    }
}

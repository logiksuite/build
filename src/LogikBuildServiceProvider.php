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

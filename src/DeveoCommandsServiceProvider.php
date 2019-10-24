<?php

namespace Deveodk\DeveoCommands;

use Deveodk\DeveoCommands\Commands\FreshDbCommand;
use Illuminate\Support\ServiceProvider;

class DeveoCommandsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                FreshDbCommand::class
            ]);
        }
    }
}

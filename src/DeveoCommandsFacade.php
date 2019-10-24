<?php

namespace Deveodk\DeveoCommands;

use Illuminate\Support\Facades\Facade;

class DeveoCommandsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'deveo-commands';
    }
}

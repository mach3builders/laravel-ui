<?php

namespace Mach3builders\Ui\Facades;

use Illuminate\Support\Facades\Facade;

class Toast extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'toast';
    }
}

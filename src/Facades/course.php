<?php

namespace kaw393939\course\Facades;

use Illuminate\Support\Facades\Facade;

class course extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'course';
    }
}

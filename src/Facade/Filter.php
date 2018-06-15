<?php

namespace TechTailor\Filter\Facade;

use Illuminate\Support\Facades\Facade;

class Filter extends Facade
{
    /**
     * Get the binding in the IoC container.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'filter'; // the IoC binding.
    }
}

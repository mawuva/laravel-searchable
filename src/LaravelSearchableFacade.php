<?php

namespace Mawuekom\LaravelSearchable;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mawuekom\LaravelSearchable\Skeleton\SkeletonClass
 */
class LaravelSearchableFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-searchable';
    }
}

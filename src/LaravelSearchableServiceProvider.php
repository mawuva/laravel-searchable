<?php

namespace Mawuekom\LaravelSearchable;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Arr;
use Illuminate\Support\ServiceProvider;

class LaravelSearchableServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        Builder::macro('whereLike', function ($attributes, string $searchTerm) {
            $this ->where(function (Builder $query) use ($attributes, $searchTerm) {
                foreach (Arr::wrap($attributes) as $attribute) {
                    $query ->orWhere($attribute, 'LIKE', "%{$searchTerm}%");
                }
            });
        
            return $this;
        });
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        
    }
}

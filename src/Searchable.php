<?php

namespace Mawuekom\LaravelSearchable;

use Illuminate\Database\Eloquent\Builder;

trait Searchable
{
    /**
     * Scope a query to make search on model.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param array $attributes
     * @param string $searchTerm
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function search($query, array $attributes, string $searchTerm): Builder
    {
        return $query ->whereLike($attributes, $searchTerm);
    }
}

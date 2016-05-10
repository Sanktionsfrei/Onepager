<?php


namespace App;


/**
 * Class UseSlugAsRouteKey
 * @package App
 */
trait UseSlugAsRouteKey
{
    /**
     * @return string
     */
    public function getRouteKey()
    {
        return $this->attributes['slug'];
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
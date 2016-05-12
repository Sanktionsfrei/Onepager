<?php
/**
 *
 * User: christianbartelt
 * Date: 10.05.16
 * Time: 05:26
 */

namespace App\Repositories\Traits;


trait HasSlugAttribute
{
    public function transformSlug($text)
    {
        return str_slug($text,'-');        
    }
}
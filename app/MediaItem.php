<?php


namespace App;


class MediaItem extends BaseModel
{
    protected $table = 'media_items';

    public function getSizeAttribute()
    {
        $decimals = 2;
        $size = ['B', 'kB', 'MB', 'GB', 'TB', 'PB'];
        $factor = floor((strlen($this->attributes['size']) - 1) / 3);

        return sprintf("%.{$decimals}f", $this->attributes['size'] / pow(1024, $factor)) .
        @$size[$factor];
    }

    public function getUrlAttribute()
    {
        
    }

}
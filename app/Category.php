<?php


namespace App;


class Category extends BaseModel
{
    use UseSlugAsRouteKey;
    
    protected $table = 'categories';

    protected $fillable = [
        'name', 'slug'
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

}
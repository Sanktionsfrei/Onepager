<?php


namespace App;


class Post extends BaseModel
{
    use UseSlugAsRouteKey;
    
    protected $table = 'posts';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
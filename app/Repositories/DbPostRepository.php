<?php

namespace App\Repositories;


use App\Post;
use App\Repositories\Traits\HasSlugAttribute;

class DbPostRepository extends AbstractRepository implements PostRepositoryContract
{
    use HasSlugAttribute;
    
    protected $eloquentModel = Post::class;
    
    protected $transform = [
        'title' => 'slug'
    ];

    public function paginate($count)
    {
        return $this->modelInstance->paginate($count);
    }
}
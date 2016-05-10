<?php


namespace App\Repositories;


use App\Category;
use App\Repositories\Traits\HasSlugAttribute;

class DbCategoryRepository extends AbstractRepository implements CategoryRepositoryContract
{
    use HasSlugAttribute;
    
    protected $eloquentModel = Category::class;

    protected $transform = [
        'name' => 'slug'
    ];

}
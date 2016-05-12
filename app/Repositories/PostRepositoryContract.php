<?php

namespace App\Repositories;

/**
 *
 */
interface PostRepositoryContract extends RepositoryContract
{
    public function paginate($count);

}
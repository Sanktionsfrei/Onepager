<?php

namespace App\Repositories;

/**
 * Repository contract
 */
interface RepositoryContract
{
    /**
     * @return mixed
     */
    public function all();

    /**
     * @param $slug
     * @return mixed
     */
    public function findBySlug($slug);

    /**
     * @param $id
     * @return mixed
     */
    public function find($id);

    /**
     * @param array $attributes
     * @return mixed
     */
    public function store(array $attributes);

    /**
     * @param $model
     * @param array $attributes
     * @return mixed
     */
    public function update($model, array $attributes);

    /**
     * @param $id
     * @return mixed
     */
    public function destroy($id);
}
<?php

namespace App\Repositories;


/**
 * Class AbstractRepository
 */
abstract class AbstractRepository implements RepositoryContract
{

    /**
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $modelInstance;

    /**
     * @var string
     */
    protected $eloquentModel;

    /**
     * @var array
     */
    protected $transform = [];

    /**
     * AbstractRepository constructor.
     */
    public function __construct()
    {
        $this->modelInstance = new $this->eloquentModel;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function all()
    {
        return $this->modelInstance->all();
    }

    /**
     * @param $slug
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function findBySlug($slug)
    {
        return $this->modelInstance->whereSlug($slug)->firstOrFail();
    }

    /**
     * @param $id
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function find($id)
    {
        return $this->modelInstance->findOrFail($id);
    }

    /**
     * @param array $attributes
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function store(array $attributes)
    {
        return $this->modelInstance
            ->create($this->transformAttributes($attributes))
            ->save();
    }

    /**
     * @param $model
     * @param array $attributes
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function update($model, array $attributes)
    {        
        return $model->update($this->transformAttributes($attributes));
    }

    /**
     * @param $id
     * @return boolean
     */
    public function destroy($id)
    {
        return $this->modelInstance->destroy([$id]);
    }

    /**
     * @param array $attributes
     * @return array
     */
    protected function transformAttributes(array $attributes)
    {
        foreach ($this->transform as $key => $value){

            $transformMethod = "transform" . ucfirst($value);

            $attributes[$value] = $this->$transformMethod($attributes[$key]);
        }
        
        return $attributes;
        
    }
}
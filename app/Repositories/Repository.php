<?php

namespace App\Repositories;

use Illuminate\Container\Container;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

abstract class Repository implements RepositoryInterface
{
    protected $container;

    protected $model;

    public function __construct(Container $container)
    {
        $this->container = $container;
        $this->makeModel();
    }

    protected function makeModel()
    {
        $this->model = $this->container->make($this->model());
    }

    abstract public function model();

    public function find(string $id)
    {
        // TODO: Implement find() method.
    }

    public function query(array $filters)
    {
        // TODO: Implement query() method.
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update(string $id, array $data, $attribute = 'id')
    {
        return $this->model->where($attribute, '=', $id)->update($data);
    }

    public function delete(string $id)
    {
        // TODO: Implement delete() method.
    }
}

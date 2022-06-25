<?php

namespace App\Repositories;

use App\Models\Product;
use Illuminate\Container\Container;

class ProductRepository extends Repository
{
    protected $container;

    protected $model;

    public const MAX_RESULT = 15;

    public function __construct(Container $container)
    {
        $this->container = $container;
        $this->makeModel();
    }

    protected function makeModel()
    {
        $this->model = $this->container->make($this->model());
    }

    public function model()
    {
        return Product::class;
    }

    public function all()
    {
        return $this->model->latest()->paginate(self::MAX_RESULT);
    }

    public function find(string $id)
    {
        //
    }
}

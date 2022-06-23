<?php

namespace App\Repositories;

use App\Models\Course;
use Illuminate\Container\Container;

class CourseRepository extends Repository
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

    public function model()
    {
        return Course::class;
    }

    public function all()
    {
        return $this->model->latest()->get();
    }

    public function paginate(?int $count)
    {
        return $this->model->latest()->paginate($count);
    }

    public function find(string $id)
    {
        //
    }
}

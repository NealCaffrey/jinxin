<?php

namespace App\Admin\Repositories;

use App\Models\Example as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Example extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}

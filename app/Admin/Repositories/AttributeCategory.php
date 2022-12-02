<?php

namespace App\Admin\Repositories;

use App\Models\AttributeCategory as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class AttributeCategory extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}

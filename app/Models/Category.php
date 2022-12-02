<?php

namespace App\Models;

use Dcat\Admin\Traits\ModelTree;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use ModelTree;

    protected $table = 'category';

    protected $titleColumn = 'name';
    protected $orderColumn = 'order';
    protected $parentColumn = 'parent_id';

}

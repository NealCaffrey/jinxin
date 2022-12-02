<?php

namespace App\Models;

use Dcat\Admin\Traits\ModelTree;
use Illuminate\Database\Eloquent\Model;

class Nav extends Model
{
    use ModelTree;

    protected $table = 'nav';

    protected $titleColumn = 'title';
    protected $orderColumn = 'order';
    protected $parentColumn = 'parent_id';
}

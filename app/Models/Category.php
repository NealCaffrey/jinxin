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

    //获取导航分类
    public static function getNavCategory()
    {
        return self::where('parent_id', '=', 0)->get()->toArray();
    }

    public static function getProductCategory()
    {
        return self::get()->toArray();
    }
}

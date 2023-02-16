<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Appearance extends Model
{
	use HasDateTimeFormatter;
    use SoftDeletes;

    protected $table = 'appearance';


    public static function getProductList()
    {
        return self::get()->toArray();
    }
}

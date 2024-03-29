<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
	use HasDateTimeFormatter;
    use SoftDeletes;

    protected $table = 'brand';

    public static function getNavBrand()
    {
        return self::get()->toArray();
    }
}

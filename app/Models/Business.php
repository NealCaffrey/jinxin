<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
	use HasDateTimeFormatter;


    protected $table = 'business';


    public static function getHomeBusiness()
    {
        return self::get()->toArray();
    }
}

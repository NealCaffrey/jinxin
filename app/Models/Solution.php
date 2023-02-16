<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
	use HasDateTimeFormatter;


    protected $table = 'solution';


    public static function getList()
    {
        return self::get()->toArray();
    }
}

<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
	use HasDateTimeFormatter;




    public static function getSiteConfigs()
    {
        $configs = self::all()->toArray();
        return array_column($configs, 'content', 'name');
    }
}

<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class AttributeCategory extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'attribute_category';
}

<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'attribute';

    public function category()
    {
        return $this->belongsTo(AttributeCategory::class, 'category_id', 'id');
    }
}

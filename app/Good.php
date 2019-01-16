<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    protected $fillable = ['name', 'category_id', 'description', 'price', 'latin_url'];
}

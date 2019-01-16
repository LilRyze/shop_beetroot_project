<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goods_Order extends Model
{
    protected $fillable = ['goods_id', 'order_id', 'amount'];
}

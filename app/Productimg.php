<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productimg extends Model
{
    protected $table ='product_img';
    protected $fillable=['product_id','img'];
}

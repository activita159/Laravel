<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ='products';
    protected $fillable = ['type_id','name','price','content','img'];
    public function images() {
        return $this->hasMany('App\Productimg', 'product_id', 'id');
    }
}

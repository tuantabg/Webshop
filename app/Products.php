<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = "producrs";

    public function product_type() {
        return $this->belongsTo('App\Product_type','id_type','id');
    }

    public function bill_detail() {
        return $this->hasMany('App\BillDetail','id_product','id');
    }
}

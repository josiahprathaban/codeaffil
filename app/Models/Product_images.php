<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_images extends Model
{
    use HasFactory;
    // protected $fillable = [
    //     'image_1'
    // ];
    protected $table = "product_images";
    
    public function product(){
        return $this->belongsTo('App\Models\Product');
    }
}

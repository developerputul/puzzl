<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id','id');
    }// End Method

    public function subcategory(){
        return $this->belongsTo(SubCategory::class, 'subcategory_id','id');
    }// End Method
}

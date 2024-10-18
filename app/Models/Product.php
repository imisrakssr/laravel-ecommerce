<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'brand_id',
        'category_id',
        'subcat_id',
        'short_details',
        'long_details',
        'regular_price',
        'offer_price',
        'quantity',
        'sku_code',
        'video_link',
        'is_featured',
        'status',
        'tags',
    ];

    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function subcat(){
        return $this->belongsTo(SubCategory::class);
    }
}

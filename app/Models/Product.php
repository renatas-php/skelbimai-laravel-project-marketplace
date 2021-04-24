<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{   
    protected $casts = [
        'images' => 'array',
    ];

    protected $fillable = ['user_id', 'title', 'category_id', 'subcategory_id', 'subsubcategory_id', 'condition', 'qty', 
                           'description', 'price', 'shipping_price', 'shipping_length', 'city_id', 'images'];

    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function offers() {
        return $this->hasMany(Offer::class);
    }

    public function cart() {
        return $this->belongsTo(Cart::class);
    }

    public function sold() {
        return $this->belongsTo(ProductSold::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSold extends Model
{
    use HasFactory;

    protected $casts = [
        'tracking' => 'array',
    ];

    protected $fillable = ['user_id', 'seller_id', 'product_id', 'price', 'qty', 'status', 'tracking'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function product() {
        return $this->belongsTo(Product::class);
    }
    
}

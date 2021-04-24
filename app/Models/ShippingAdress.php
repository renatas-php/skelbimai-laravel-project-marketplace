<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippingAdress extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'name', 'phone', 'adress', 'city', 'post'];

    public function user() {
        return $this->belongsTo(User::class);
    }
}

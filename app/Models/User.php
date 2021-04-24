<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    public function products() {
        return $this->hasMany(Product::class);
    }
    public function offers() {
        return $this->hasMany(Offer::class);
    }
    public function userInfo($id) {
        $userInfo = User::find($id);
        return $userInfo;
    }
    public function userInfos() {
        return $this->belongsTo(UserInfos::class, 'id', 'user_id');
    }
    public function messages() {
        return $this->hasMany(Message::class);
    }
    public function solds() {
        return $this->hasMany(ProductSold::class, 'seller_id', 'id');
    }
    public function shippingAdress() {
        return $this->belongsTo(ShippingAdress::class, 'id', 'user_id');
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

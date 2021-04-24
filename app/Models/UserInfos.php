<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfos extends Model
{
    use HasFactory;

    protected $casts = [
        'shipping' => 'array',
        'account' => 'array'
    ];

    protected $fillable = ['user_id', 'shipping', 'account', 'avatar'];

    public function user() {
        return $this->belongsTo(User::class);
    }
    
}

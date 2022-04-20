<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class CreditCard extends Model
{

    protected $fillable = [
        'code',
        'expired_at',
        'secret_code',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}

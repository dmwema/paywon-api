<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreditCard extends Model
{
    use SoftDeletes;

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

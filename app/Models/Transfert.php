<?php

namespace App\Models;

use App\Models\User;
use App\Models\Person;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transfert extends Model
{

    protected $fillable = [
        'person_id',
        'user_id',
        'amount_from',
        'amount_to',
        'currency_from',
        'currency_to',
        'transfert_date',
        'commision_transact',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function person(){
        return $this->belongsTo(Person::class);
    }
}

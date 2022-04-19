<?php

namespace App\Models;

use App\Models\User;
use App\Models\Transfert;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    //
    protected $fillable = [
        'name',
        'lastname',
        'firstname',
        'address',
        'phone_number'
    ];

    public function users(){
        return $this->belongsToMany(User::class);
    }

    public function transferts(){
        return $this->hasMany(Transfert::class);
    }
}

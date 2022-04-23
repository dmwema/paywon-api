<?php

namespace App\Models;

use App\Models\User;
use App\Models\Phone;
use App\Models\Address;
use App\Models\Transfert;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Person extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'name',
        'lastname',
        'firstname'
    ];

    public function users(){
        return $this->belongsToMany(User::class);
    }

    public function transferts(){
        return $this->hasMany(Transfert::class);
    }

    public function addresses(){
        return $this->hasMany(Address::class);
    }

    public function phones(){
        return $this->hasMany(Phone::class);
    }
}

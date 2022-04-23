<?php

namespace App\Models;

use App\Models\Phone;
use App\Models\Person;
use App\Models\Address;
use App\Models\Transfert;
use App\Models\CreditCard;
use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable, HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'lastname',
        'firstname',
        'mail',
        'password'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var string[]
     */
    protected $hidden = [
        'password',
    ];

    public function peoples(){
        return $this->belongsToMany(Person::class);
    }

    public function credit_cards(){
        return $this->hasMany(CreditCard::class);
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

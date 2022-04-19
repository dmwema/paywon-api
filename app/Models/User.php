<?php

namespace App\Models;

use App\Models\Person;
use App\Models\Transfert;
use App\Models\CreditCard;
use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

class User extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable, HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name', 'lastname','firstname', 'address','phone_number','mail','password'
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
}

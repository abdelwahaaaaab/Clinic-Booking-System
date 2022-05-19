<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class signup extends Model
{
    use HasFactory;
    protected $fillable = ['name',  'email', 'password', 'password_confirmation'];

    /*public function setPasswordAttribute( $password )
    {
        $this->attributes['password'] = bcrypt($password);
        $this->attributes['password_confirmation'] = bcrypt($password_confirmation);
        
    }*/

    
}



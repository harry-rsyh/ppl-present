<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserDessert extends Model
{
    protected $table = 'user_dessert';
    protected $fillable = ['id_UserDessert','foto', 'menu', 'label','harga'];
}

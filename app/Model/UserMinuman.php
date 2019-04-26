<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserMinuman extends Model
{
    protected $table = 'user_minuman';
    protected $fillable = ['id_UserMinuman','foto', 'menu', 'label','harga'];
}

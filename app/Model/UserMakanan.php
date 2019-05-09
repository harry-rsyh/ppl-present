<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserMakanan extends Model
{
    protected $table = 'user_makanan';
    protected $primaryKey = 'id_UserMakanan';
    protected $fillable = ['id_UserMakanan','foto','menu','label','harga'];
}
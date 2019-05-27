<?php

use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
    static $i   = 0;
    $username   = array('admin','kasir','pelayan','meja_1','meja_2','meja_3','meja_4');
    $password   = array('admin','kasir','pelayan','meja_1','meja_2','meja_3','meja_4');
    $level      = array('1','2','3','4','4','4','4');
    $meja       = array('0','0','0','1','2','3','4');
    return [
        'username'  =>  $username[$i],
        'password'  =>  bcrypt($password[$i]),
        'level'     =>  $level[$i],
        'meja'      =>  $meja[$i++]
    ];
});

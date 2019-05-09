<?php

use Faker\Generator as Faker;

$factory->define(App\Model\User\User::class, function (Faker $faker) {
    static $i      = 0;
    $email          = array('admin@msg.com', 'kasir@msg.com ','pelayan@msg.com',
                           'user_1@gmail.com','user_2@gmail.com','user_3@gmail.com');
    $passw          = array('admin','kasir','pelayan',
                           'user_1','user_2','user_3');
    $level          = array('1','2','3','4','4','4');
    return [
        'email'  => $email[$i],
        'password'  => bcrypt($passw[$i]),
        'level' => $level[$i++],
    ];
});

<?php

use Faker\Generator as Faker;

$factory->define(App\Model\UserDessert::class, function (Faker $faker) {
    static $number = 1;
    static $i      = 0;
    $menu          = array('Pie Jeruk', 'Sup Buah','Martabak Lenggang',
                           'Es Cream','Kue Lapis','Serabi');
    $label         = array('Cream / Keju','Biasa / Komplit','Mix / Sigle Varian',
                           'Jeruk / Melon / Timun','Traditional / Mix','Mix / Sigle Varian'); 
    $harga         = array('Rp 5K /Potong','Rp 12K /Cup','Rp 5K /3 Piece',
                           'Rp 13K /Potong','Rp 15K /Plate','Rp 8K /4 Potong');
    return [
        'foto'  => 'img/dessert/dessert-'.$number++.'.jpg',
        'menu'  => $menu[$i],
        'label' => $label[$i],
        'harga' => $harga[$i++],
    ];
});

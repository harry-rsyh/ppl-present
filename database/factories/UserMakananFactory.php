<?php

use Faker\Generator as Faker;

$factory->define(App\Model\UserMakanan::class, function (Faker $faker) {
    static $number = 1;
    static $i      = 0;
    $menu          = array('Udang Kecap', 'Ikan Bakar','Mie Goreng',
                           'Nasgor Telor','Ketoprak','Soto Kudus');
    $label         = array('Pedas / Sedang / Manis','Pedas / Sedang / Manis','Biasa / Jumbo',
                           'Biasa / Jumbo','Pedas / Sedang / Manis','Sedang / Besar'); 
    $harga         = array('Rp 25K','Rp 20K','Rp 18K',
                           'Rp 20K','Rp 15K','Rp 14K');
    return [
        'foto'  => 'img/makanan/makanan-'.$number++.'.jpg',
        'menu'  => $menu[$i],
        'label' => $label[$i],
        'harga' => $harga[$i++],
    ];
});

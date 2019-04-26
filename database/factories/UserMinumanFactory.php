<?php

use Faker\Generator as Faker;

$factory->define(App\Model\UserMinuman::class, function (Faker $faker) {
    static $number = 1;
    static $i      = 0;
    $menu          = array('Lemon Tea', 'Milk Shake','Teh',
                           'Es Cendol','Es Kelapa','Es Tebu');
    $label         = array('Es / Hangat','Oreo / Chocolate','Es / hangat',
                           'Sedang / Jumbo','Murni / Campur','Es / Murni'); 
    $harga         = array('Rp 10K','Rp 12K','Rp 5K',
                           'Rp 13K','Rp 15K','Rp 8K');
    return [
        'foto'  => 'img/minuman/minuman-'.$number++.'.jpg',
        'menu'  => $menu[$i],
        'label' => $label[$i],
        'harga' => $harga[$i++],
    ];
});

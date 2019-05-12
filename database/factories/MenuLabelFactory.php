<?php

use Faker\Generator as Faker;

$factory->define(App\Model\MenuLabel::class, function (Faker $faker) {
    return [
        'foto'  => 'img/dessert/dessert-'.$number++.'.jpg',
        'menu'  => $menu[$i],
        'label' => $label[$i],
        'harga' => $harga[$i++],
    ];
});

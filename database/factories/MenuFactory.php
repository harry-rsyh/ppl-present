<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Menu::class, function (Faker $faker) {
    static $i = 0;
    $menu   = array('Udang Kecap', 'Ikan Bakar','Mie Goreng','Nasgor Telor','Ketoprak','Soto Kudus','Lemon Tea', 'Milk Shake','Teh','Es Cendol','Es Kelapa','Es Tebu','Pie Jeruk', 'Sup Buah','Martabak Lenggang','Es Cream','Kue Lapis','Serabi');
    $harga  = array('25000','20000','18000','20000','15000','14000','10000','12000','5000','13000','15000','8000','5000','12000','5000','13000','15000','8000');
    $gambar = array('makanan-1.jpg','makanan-2.jpg','makanan-3.jpg','makanan-4.jpg','makanan-5.jpg','makanan-6.jpg','minuman-1.jpg','minuman-2.jpg','minuman-3.jpg','minuman-4.jpg','minuman-5.jpg','minuman-6.jpg','dessert-1.jpg','dessert-2.jpg','dessert-3.jpg','dessert-4.jpg','dessert-5.jpg','dessert-6.jpg');
    $label  = array('1','1','1','1','1','1','2','2','2','2','2','2','3','3','3','3','3','3');
    $keterangan = array()
    return [
        'menu'=> $menu[$i],
        'harga'=> $harga[$i],
        'gambar'=>'img/menu/'.$gambar[$i],
        'labelmenu_id'=>$label[$i],
        'keterangan'=>'',
        'terjual'=> '0',
        'status'=> '1',
    ];
});

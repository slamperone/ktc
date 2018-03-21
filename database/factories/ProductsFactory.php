<?php

use Faker\Generator as Faker;

$factory->define(App\Products::class, function (Faker $faker) {
	$fotos = array(
		'foto0' => $faker->image('public/img/products',400,300),
		'foto1' => $faker->image('public/img/products',400,300),
		'foto2' => $faker->image('public/img/products',400,300),
    );

    return [
        'nombre' => $faker->word ,
        'sku' => $faker->numberBetween(100,999).'-'.$faker->colorName.'-'.$faker->word.'-'.$faker->countryCode,
        'desc' => $faker->sentence($nbWords=62),
        'fabricante' => $faker->numberBetween(1,6),
        'categoria' => $faker->numberBetween(1,14),
        'fichaTecnica' => 'ft.pdf',
        'fotos' => json_encode($fotos)
    ];
});

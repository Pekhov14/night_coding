<?php

// 64331ac3d5fdc2c368d5250b608ed68f

$url = 'http://api.openweathermap.org/data/2.5/weather';

$options = [
//    'id'    => 703448,
    'q'    => 'Moscow',
    'APPID' => '64331ac3d5fdc2c368d5250b608ed68f',
    'units' => 'metric',
    'lang'  => 'en' // ru
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url.'?'.http_build_query($options));

$respons = curl_exec($ch);
$data = json_decode($respons, true); // преобразование в массив
curl_close($ch);

echo '<pre>';
print_r($data);
echo '<pre>';

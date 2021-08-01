<?php

// https://www.php.net/manual/pt_BR/function.date

// echo date('d/m/Y').PHP_EOL;

$data = new DateTime();

// echo $data->format('d/m/y H:i:s').PHP_EOL;

/*
 * P -> Representação de Período. Vem antes de:
 *      Y  anos
 *      M  meses
 *      D  dias
 *      W  semanas
 * T -> Representação de tempo. Vem antes de:
 *      H  hora
 *      M  minutos
 *      S  segundos
 */

// var_dump($data);

// $intervalo = new DateInterval('PT5M'); // adiciona um período de 5 minutos
// $data->add($intervalo);

var_dump($data);

$intervalo = new DateInterval('P5Y10M5DT10H50M10S'); 
// subtrai um período de  5 anos, 10 meses, 5 dias, 10 horas, 50 minutos e 10 segundos
$data->sub($intervalo);

var_dump($data);
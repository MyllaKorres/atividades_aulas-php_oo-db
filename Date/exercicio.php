<?php

/*
 *  EXERCÍCIO
 *
 *  Crie uma data coma classe DateTime com a data e hora atuais. Em seguida, subtraia
 *  5 dias, 10 horas e 50 minutos dessa data e exiba o resultado no seguinte formato:
 *  dia/mês/ano - hora:minuto:segundo
 */

$data_atual = new DateTime();

$interv = new DateInterval('P5DT10H50M');
$data_atual->add($interv);

echo $data_atual->format('d/m/Y - H:i:s');
<?php

$email = 'walisson@mundowap.com.br';

$posicao = strpos($email, '@');

//Para buscar uma string em especifico de uma string

echo substr($email,0, 8) . PHP_EOL;
echo substr($email, $posicao ) . PHP_EOL;
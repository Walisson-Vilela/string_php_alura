<?php

$nome = 'Walisson dos santos';
//Para verificar se uma string esta dentro de outra string
$familia = str_contains($nome, 'Vilela');

if ($familia) {
    echo "$nome percente a familia" . PHP_EOL;
} else {
    echo "$nome não percente a familia" . PHP_EOL;
}
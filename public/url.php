<?php

$url = 'https://alura.com/';

//verificar se a url contem https
if (str_starts_with($url, 'https')) {
    echo "é uma url segura".PHP_EOL;
} else {
    echo "não é uma url segura" . PHP_EOL;
};

//Verifica o final da string
if (str_ends_with($url, '.br')) {
    echo "é um dominio do Brasil" .PHP_EOL;
} else {
    echo "não é um dominio do Brasil" . PHP_EOL;
};
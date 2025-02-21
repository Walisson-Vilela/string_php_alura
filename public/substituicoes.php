<?php

$texto = 'Texto com qualquer coisa poxa e caramba';

echo str_replace(
        ['poxa', 'caramba'],
        '***',
        $texto
    ) . PHP_EOL;

$trans = ["hello" => "hi", "hi" => "hello"];
echo strtr("hi all, I said Hello!", $trans) . PHP_EOL;
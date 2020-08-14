<?php

echo "Dgite um número inteiro: " .PHP_EOL;

$numero = readline("número:");

if ($numero %2 == 0){
    echo "O número é par" .PHP_EOL;
} else {
    echo "O número é ímpar" .PHP_EOL;
}

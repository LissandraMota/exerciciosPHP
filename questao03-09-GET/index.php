<?php

$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];

$soma = $numero1 + $numero2;
$subtracao = $numero1 - $numero2;
$divisao = $numero1 / $numero2;
$multiplicacao = $numero1 * $numero2; 

echo "O valor da soma é: $soma \n";
echo "O valor da subtração é: $subtracao\n";
echo "O valor da divisão é: $divisao\n";
echo "O valor da multiplicação é: $multiplicacao\n";
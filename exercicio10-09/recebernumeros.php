<?php

$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];

$soma = $numero1 + $numero2;
$subtracao = $numero1 - $numero2;
$divisao = $numero1 / $numero2;
$multiplicacao = $numero1 * $numero2; 

echo "O valor da soma é: $soma <br>";
echo "O valor da subtração é: $subtracao <br>";
echo "O valor da divisão é: $divisao <br>";
echo "O valor da multiplicação é: $multiplicacao <br>";
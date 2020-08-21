<?php

require "Operacao.php";
require "Calculadora.php";

$operador = readline("Digite a operacação desejada: ");
$n1 = readline("Digite o primeiro número:");
$n2 = readline("Digite o segundo número:");

$op = new Operacao($operador, $n1, $n2);
$calculadora = new Calculadora($op);

$calculadora->acao();

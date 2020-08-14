<?php

$nota1 = 0;
$nota2 = 0;
$nota3 = 0;
$nota4 = 0;
$media = 0;
$soma = 0;
$nome;
$divisor = 4;

echo "Digite o seu nome:";
$nome = readline();

$nota1 = readline("Digite a primeira nota:");
$nota2 = readline("Digite a segunda nota:");
$nota3 = readline("Digite a terceira nota:");
$nota4 = readline("Digite a quarta nota:");


$soma = $nota1 + $nota2 + $nota3 + $nota4;
$media = $soma / $divisor;


if($media < 7){
   echo "aluno reprovado";
} else {
    echo "aluno aprovado";
}


echo "O aluno(a) $nome obteve a media: $media ";


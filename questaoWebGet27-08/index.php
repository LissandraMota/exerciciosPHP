<?php

$numero = $_GET['numero'];

//var_dump($GET);
if($numero % 2 == 0)
{
    echo "O número é par";
}else{
    echo "O número é ímpar";
}
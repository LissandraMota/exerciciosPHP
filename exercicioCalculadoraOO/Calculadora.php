<?php

class Calculadora
{
    public $operacao;

    public function __construct($operacao)
    {
        $this->operacao = $operacao;
    }

    public function acao()
    {
        $this->operacao->calculo();
        echo"Resultado do cálculo:". $this->operacao->resultado;
    }
}

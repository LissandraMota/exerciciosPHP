<?php

class Operacao
{
    public $num1;
    public $num2;
    public $tipo;
    public $resultado;

    public function __construct($tipo, $num1, $num2)
    {
        $this->tipo = $tipo;
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function calculo()
    {
        switch($this->tipo){
            case "soma":
                $this->soma();
                break;
            case "subtracao":
                $this->subtracao();
                break;
            case "divisao":
                $this->divisao();
                break;
            case "multiplicacao":
                $this->multiplicacao();
                break;
            default:
                echo"Tipo Inválido";
                break;
        }
    }

    public function soma()
    {
        $this->resultado = $this->num1 + $this->num2;
    }

    public function subtracao()
    {
        $this->resultado = $this->num1 - $this->num2;
    }

    public function divisao()
    {
        $this->resultado = $this->num1 / $this->num2;
    }

    public function multiplicacao()
    {
        $this->resultado = $this->num1 * $this->num2;
    }
}




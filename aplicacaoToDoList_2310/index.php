<?php
//basicamente é o ponto central do sistema

require "src\classes\Tarefa.php";
require "src\classes\ArquivoTarefa.php";

// 0 status aberto, id será gerado pela aplicação
//$tarefa = new Tarefa(0, "Teste", "Teste da classe tarefa", "22/10/2020");
//$tarefa2 = new Tarefa(1, "Teste 2", "Teste da classe tarefa 2", "23/10/2020");

//$listaTarefas = [];
//$listaTarefas[] = $tarefa;
//$listaTarefas[] = $tarefa2;

$arquivoTarefa = new ArquivoTarefa("tarefas.json");

//chamando o método salva
//$arquivoTarefa->salva([$tarefa]);
//$arquivoTarefa->salva($listaTarefas);

print_r($arquivoTarefa->ler());


//$tarefa->setId(1);

//vardump faz um dump do ques está na memória
//print_r faz o mesmo que o vardump
//echo "<pre>";
//print_r($tarefa->getId()); //acessando o atributo private e vendo pelo prin_r
//echo "</pre>";
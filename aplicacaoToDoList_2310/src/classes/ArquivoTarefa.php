<?php

class ArquivoTarefa
{
    private $caminho; //caminho do arquivo

    public function __construct(string $caminho)
    {
        $this->caminho = $caminho;
    }

    //métodos
    //salva tarefa
    public function salva(array $tarefas)
    {   
      //convertendo o objeto para array
      $dataTarefas = [];
      $cont = 1;
      foreach ($tarefas as $key => $tarefa) {
         $arr['id'] = $cont++;
         $arr['nome'] = $tarefa->getNome();
         $arr['descricao'] = $tarefa->getDescricao();
         $arr['dataLimite'] = $tarefa->getDataLimite();
         $arr['status'] = $tarefa->getStatus();
         $dataTarefas[] = $arr;
      }
      //print_r($dataTarefas);
      //die;
      $jsonTarefas = json_encode($dataTarefas); //pega um array do php em transforma em json
      file_put_contents($this->caminho, $jsonTarefas); //salvar em caminho o json de tarefas
    }

    //ler tarefa
    public function ler()
    {
        //json decode: processo inverso do json encode
        $jsonTarefas = json_decode(file_get_contents($this->caminho)); //retorna o centeúdo
        $dataTarefas = [];
        foreach ($jsonTarefas as $key => $obj) {
           $t = new Tarefa($obj->status, $obj->nome, $obj->descricao, $obj->dataLimite);
           $t->setId($obj->id);
           $dataTarefas[] = $t;
        }
        return $dataTarefas;
    }
}
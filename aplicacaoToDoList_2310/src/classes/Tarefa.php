<?php

class Tarefa
{
    //atributos da classe
    private $id;
    private $status;
    private $nome;
    private $descricao;
    private $dataLimite;

    //construtor
    public function __construct(int $status, string $nome, string $descricao, string $dataLimite)
    {
        //id vai ser gerado automático
        $this->status = $status;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->dataLimite = $dataLimite;
    }

    //acesso aos atributos -->getter e setter
    // o this é o próprio objeto
    // o this é a referencia da prórpia classe
    public function getId()
    {
        //retornar o id
        return $this->id;
        //$tarefa->id = $id; (como se fosse)
    }

    public function setId(int $id)
    {
        //seta um id
        $this->id = $id;
    }

    public function getStatus()
    {
        //retornar o status
        return $this->status;
    }

    public function setStatus(int $status)
    {
        //int - 1 concluido, 0 - não concluído
        //seta um status
        $this->status = $status;
    }

    public function getNome()
    {
        //retorna o atributo nome
        return $this->nome;
    }

    public function setNome(string $nome)
    {
        //seta um nome para o atributo nome
        $this->nome = $nome;
    }

    public function getDescricao()
    {
        //retornar o atributo descricao da classe
        return $this->descricao;
    }

    public function setDescricao(string $descricao)
    {
        //seta uma descricao para o atributo descricao
        $this->descricao = $descricao;
    }

    public function getDataLimite()
    {
        //retorna a instancia data limite
        return $this->dataLimite;
    }

    public function setDataLimite(string $dataLimite)
    {
        //seta uma data Limite
        $this->dataLimite = $dataLimite;
    }

}
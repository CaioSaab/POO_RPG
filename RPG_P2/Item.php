<?php

class Item {
    private string $nome;
    private int $tamanho;
    private string $classe;

    public function __construct(string $nome,int $tamanho,string $classe){
        $this->setNome($nome);
        $this->setTamanho($tamanho);
        $this->setClasse($classe);
    }
    public function getNome(): string{
        return $this->nome;
    }
    public function setNome($nome): void{
        $this->nome = $nome;
    }
    public function getTamanho(): int{
        return $this->tamanho;
    }
    public function setTamanho($tamanho): void{
        $this->tamanho = $tamanho;
    }
    public function getClasse(): string{
        return $this->classe;
    }
    public function setClasse($classe): void{
        $this->classe = $classe;
    }
}
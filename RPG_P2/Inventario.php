<?php

require_once("Item.php");

class Inventario{
    private int $capacidadeMaxima;
    private array $itens = [];

    public function __construct($capacidade){
        $this->setCapacidadeMaxima($capacidade);
    }
    
    public function getCapacidadeMaxima(): int{
        return $this->capacidadeMaxima;
    }
    public function setCapacidadeMaxima($capacidade): void{
        $this->capacidadeMaxima = $capacidade;
    }
    public function getItens(){
        return $this->itens;
    }
    //Verifica se o inventário possui espaço para armazenar o item e imprime caso dê certo ou não
    public function adicionar(Item $item){
        if ($this->capacidadeLivre() >= $item->getTamanho()){
            $this->itens[] = $item;
            return true;
        } else {
            return false;
        }
    }

    //Procura em uma array o Item semelhante ao do parâmetro para remover. Remove ele com unset e imprime caso dê certo
    public function remover(Item $item){
        foreach($this->itens as $index => $objeto){
            if ($item === $objeto){
                unset($this->itens[$index]);
                echo "{$objeto->getNome()} removido!<br>";
            }
        }
    }
    //Cria uma variável para armazenar o tamanho de cada objeto. Passa por cada objeto da lista e adiciona seu tamanho na variavel, somando assim a capacidade total ocupada pelo inventário
    public function capacidadeLivre(): int{
        $capacidade = 0;
        foreach ($this->itens as $item){
            $capacidade += $item->getTamanho();
        }
        return $this->capacidadeMaxima - $capacidade;
    }
    
    public function info(){
        echo "Itens no inventário: <br>";
        foreach($this->itens as $item){
            echo "- {$item->getNome()}<br>";
        }
    }
}
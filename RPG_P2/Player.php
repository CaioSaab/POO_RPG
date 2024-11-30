<?php

require_once('Inventario.php');

class Player{
    private string $nickname;
    private int $nivel;
    private Inventario $inventario;

    public function __construct(string $nickname, int $nivel, Inventario $inventario){
        $this->setnickName($nickname);
        $this->setNivel($nivel);
        $this->setInventario($inventario);
    }

    public function getNickname():string{
        return $this->nickname;
    }
    public function setNickname(string $nickname):void{
        $this->nickname = $nickname;
    }
    public function getNivel():int{
        return $this->nivel;
    }
    public function setNivel(int $nivel):void{
        $this->nivel = $nivel;
    }
    public function getInventario():Inventario{
        return $this->inventario;
    }
    public function setInventario(Inventario $Inventario):void{
        $this->inventario = $Inventario;
    }
    
    //função coletarItem, verifica se o item pode ser coletado, dando echo nos dois casos.
    public function coletarItem($item): void{
        if($this->inventario->adicionar($item)){
            echo "{$this->nickname} coletou o item {$item->getNome()}.<br>";
        } else {
            echo "{$item->getNome()} não pode ser coletado. Capacidade máx atingida.<br>";
        }
    }

    //função soltarItem, chama a função remover (que vem do inventario), localiza o item, de acordo com o $index e remove o item,usando o unset.
    public function soltarItem($item): void{
        $this->inventario->remover($item);
    }

    //A função subirNivel aumenta o nível do jogador e chama setCapacidadeMaxima(que vem do inventario), que atualiza o limite do inventário somando a capacidade atual a um valor proporcional ao novo nível.
    public function subirNivel(): void{
        $this->nivel += 1;
        $this->inventario->setCapacidadeMaxima($this->inventario->getCapacidadeMaxima() + ($this->nivel * 3));
        echo "<b>Player {$this->nickname} chegou ao nivel {$this->nivel}!</b><br>";
    }
    
    public function info(){
        echo "O player {$this->nickname} está no nível {$this->nivel}, com {$this->inventario->CapacidadeLivre()} de espaço no inventário.<br>";
    }
}
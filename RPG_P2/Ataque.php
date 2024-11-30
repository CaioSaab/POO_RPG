<?php

require_once('Item.php');

class Ataque extends Item{
    public function __construct($nome){
        Parent::__construct($nome, 7, "Ataque");
    }
}
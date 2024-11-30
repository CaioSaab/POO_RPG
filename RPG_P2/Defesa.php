<?php

require_once('Item.php');

class Defesa extends Item{
    public function __construct($nome){
        Parent::__construct($nome, 4, "Defesa");
    }
}
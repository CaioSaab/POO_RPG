<?php

require_once('Item.php');

class Magia extends Item{
    public function __construct($nome){
        Parent::__construct($nome, 2, "Magia");
    }
}
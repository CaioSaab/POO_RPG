<?php

require_once('Ataque.php');
require_once('Defesa.php');
require_once('Magia.php');
require_once('Player.php');
require_once('Item.php');
require_once('Inventario.php');

$inventario1 = new Inventario(20);
$inventario2 = new Inventario(20);
$player1 = new Player('Felipebrks182',1,$inventario1);
$player2 = new Player('Caiosaab',1,$inventario2);
$item1 = new Magia('Cajado');
$item2 = new Magia('Livro dos condenados');
$item3 = new Ataque('Espada');
$item4 = new Ataque('Adaga');
$item5 = new Ataque('Lança');
$item6 = new Defesa('Escudo de madeira');
$item7 = new Defesa('Capacete de ferro');
$item8 = new Defesa('Escudo de metal');

echo "<h2>--Player 1--</h2>";
$player1->info();
$player1->coletarItem($item3);
$player1->coletarItem($item4);
$player1->coletarItem($item6);
$player1->coletarItem($item8);
$player1->coletarItem($item5);
$player1->info();
$player1->subirNivel();
$player1->coletarItem($item8);
$player1->soltarItem($item8);
$player1->info();
$inventario1->info();

echo "<h2>--Player 2--</h2>";
$player2->info();
$player2->coletarItem($item3);
$player2->coletarItem($item4);
$player2->coletarItem($item5);
$player2->info();
$player2->subirNivel();
$player2->subirNivel();
$player2->coletarItem($item7);
$player2->coletarItem($item2);
$player2->getInventario()->info();
echo "Capacidade livre: {$player2->getInventario()->capacidadeLivre()}<br>";
$player2->soltarItem($item7);
$player2->soltarItem($item4);
$player2->info();


    
<?php

namespace Aula15;

use Aula15\Bebidas;

require_once "bebidas.php";
require_once "bebidasDAO.php";


$Cachaca = new Bebidas("Cachaça", "Alcool", "1L", 10.00, 50);
$Vodka = new Bebidas("Vodka", "Alcool", "1L", 79.99, 12);
$Tequila = new Bebidas("Tequila", "Alcool", "1L", 129.00, 33);
$Whiskey = new Bebidas("Whiskey", "Alcool", "1L", 199.00, 5);
$Sukita = new Bebidas("Sukita", "Refrigerante", "3L", 43.90, 30);
$Guarana_jesus = new Bebidas("Guarana Jesus", "Refrigerante", "1L", 13.90, 41);
$Guarana_cruzeiro = new Bebidas("Guarana Cruzeiro", "Refrigenrante", "2L", 5.00, 100);
$Wewi = new Bebidas("Wewi", "Refrigerante", "255mL", 9.30, 69);

$bebidasDAO = new $bebidasDAO();

$bebidasDAO->criarProduto($Cachaca);
$bebidasDAO->criarProduto($Vodka);
$bebidasDAO->criarProduto($Tequila);
$bebidasDAO->criarProduto($Whiskey);
$bebidasDAO->criarProduto($Sukita);
$bebidasDAO->criarProduto($Guarana_jesus);
$bebidasDAO->criarProduto($Guarana_cruzeiro);
$bebidasDAO->criarProduto($Wewi);


<?php

namespace Aula15;

require_once "produto.php";
require_once "produtosDAO.php";


$Tomate = new Produtos(1, "Tomate", 1.20);
$Maca = new Produtos(2, "Maçã", 2.50);
$Queijo_brie = new Produtos(3, "Queijo Brie", 15.00);
$Iogurte_grego = new Produtos(4, "Iogurte Grego", 4.00);
$Guarana_jesus = new Produtos(5, "Guaraná Jesus", 3.50);
$Bolacha_bono = new Produtos(6, "Bolacha Bono", 2.00);
$Desinfetante_urca = new Produtos(7, "Desinfetante Urca", 5.00);
$Prestobarba_bic = new Produtos(8, "Prestobarba Bic", 8.00);

$produtosDAO = new produtosDAO();

$produtosDAO->criarProduto($Tomate);
$produtosDAO->criarProduto($Maca);
$produtosDAO->criarProduto($Queijo_brie);
$produtosDAO->criarProduto($Iogurte_grego);
$produtosDAO->criarProduto($Guarana_jesus);
$produtosDAO->criarProduto($Bolacha_bono);
$produtosDAO->criarProduto($Desinfetante_urca);
$produtosDAO->criarProduto($Prestobarba_bic);

$produtosDAO->atualizarProduto(7, "Desinfetante Barbarex", 6.00);
$produtosDAO->atualizarProduto(4, "Iogurte Grego", 5.00);

$produtosDAO->excluirProduto(1);
$produtosDAO->excluirProduto(2);
<?php

namespace Aula15;

require_once __DIR__ . "/../Model/bebidasDAO.php";
require_once __DIR__ . "/../Model/bebidas.php";

class BebidaController {
    private $dao;

    // Construtor: cria o objeto DAO (responsável por salvar/carregar)
    public function __construct() {
        $this->dao = new bebidasDAO();
    }

    // Lista todas as bebidas
    public function ler() {
        return $this->dao->lerBebida();
    }

    // Cadastra nova bebida
    public function criar($nome, $categoria, $volume, $valor, $qtde) {

        $bebida = new Bebidas( $nome, $categoria, $volume, $valor, $qtde);
        $this->dao->criarBebida($bebida);
    }

    // Atualiza bebida existente
    public function atualizar( $nome, $valor, $qtde) {
        $this->dao->atualizarBebida( $nome, $valor, $qtde);
    }

    // Exclui bebida
    public function deletar($nome) {
        $this->dao->excluirBebida($nome);
    }
}
?>
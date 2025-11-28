<?php

require_once __DIR__ . "/../Model/livrosDAO.php";
require_once __DIR__ . "/../Model/livros.php";

class LivrosController{
    private $dao;

    // Construtor: cria o objeto DAO (responsável por salvar/carregar)
    public function __construct() {
        $this->dao = new livrosDAO();
    }

    // Lista todas as bebidas
    public function ler() {
        return $this->dao->lerLivros();
    }

    // Cadastra nova bebida
    public function criar($titulo, $autor, $ano, $genero, $qtde) {

        $livros = new Livros( $titulo, $autor, $ano, $genero, $qtde);
        $this->dao->criarLivro($livros);
    }

    // Atualiza bebida existente
    public function atualizar( $tituloOriginal, $novoTitulo, $novoAutor, $novoAno, $novoGenero, $novoQtde) {
        $this->dao->atualizarLivro( $tituloOriginal, $novoTitulo, $novoAutor, $novoAno, $novoGenero, $novoQtde);
    }

    // Exclui bebida
    public function deletar($titulo) {
        $this->dao->excluirLivro($titulo);
    }
}
?>
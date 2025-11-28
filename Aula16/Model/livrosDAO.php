<?php
require_once 'livros.php';
require_once 'Connection.php';

class LivrosDAO {
    private $conn;

    public function __construct() {
        $this->conn = Connection::getInstance();

        // Cria a tabela se não existir
        $this->conn->exec("
            CREATE TABLE IF NOT EXISTS Livros (
                id INT AUTO_INCREMENT PRIMARY KEY,
                titulo VARCHAR(200) NOT NULL UNIQUE,
                autor VARCHAR(150) NOT NULL,
                ano INT NOT NULL,
                genero VARCHAR(100) NOT NULL,
                qtde INT NOT NULL
            )
        ");
    }
    

    // CREATE
    public function criarLivro(livros $livros) {
        $stmt = $this->conn->prepare("
            INSERT INTO Livros (titulo, autor, ano, genero, qtde)
            VALUES (:titulo, :autor, :ano, :genero, :qtde)
        ");
        $stmt->execute([
            ':titulo' => $livros->getTitulo(),
            ':autor' => $livros->getAutor(),
            ':ano' => $livros->getAno(),
            ':genero' => $livros->getGenero(),
            ':qtde' => $livros->getQtde()
        ]);
    }

    // READ
    public function lerlivros() {
        $stmt = $this->conn->query("SELECT * FROM livros ORDER BY titulo");
        $result = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $result[] = new Livros(
                $row['titulo'],
                $row['autor'],
                $row['ano'],
                $row['genero'],
                $row['qtde']
            );
        }
        return $result;
    }

    // UPDATE
    public function atualizarLivro($tituloOriginal, $novoTitulo, $novoAutor, $novoAno, $novoGenero, $novoQtde) {
        $stmt = $this->conn->prepare("
            UPDATE livros
            SET titulo = :novoTitulo, autor = :novoAutor, ano = :novoAno, genero = :novoGenero, qtde = :novoQtde
            WHERE titulo = :tituloOriginal
        ");
        $stmt->execute([
            ':novoTitulo' => $novoTitulo,
            ':novoAutor' => $novoAutor,
            ':novoAno' => $novoAno,
            ':novoGenero' => $novoGenero,
            ':novoQtde' => $novoQtde,
            ':tituloOriginal' => $tituloOriginal
        ]);
    }

    // DELETE
    public function excluirLivro($titulo) {
        $stmt = $this->conn->prepare("DELETE FROM livros WHERE titulo = :titulo");
        $stmt->execute([':titulo' => $titulo]);
    }

    // BUSCAR POR NOME
    public function buscarPorTitulo($titulo) {
        $stmt = $this->conn->prepare("SELECT * FROM livros WHERE titulo = :titulo LIMIT 1");
        $stmt->execute([':titulo' => $titulo]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($row) {
            return new Livros(
                $row['titulo'],
                $row['autor'],
                $row['ano'],
                $row['genero'],
                $row['qtde']
            );
        }
        return null;
    }
}
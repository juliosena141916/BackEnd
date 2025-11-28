<?php

require_once __DIR__ . '/../Controller/LivrosController.php';

$controller = new LivrosController();

// Ações da página
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['acao'] === 'criar') {
        $controller->criar($_POST['titulo'], $_POST['autor'], $_POST['ano'], $_POST['genero'], $_POST['qtde']);
    } elseif ($_POST['acao'] === 'deletar') {
        $controller->deletar($_POST['titulo']);
    } elseif ($_POST['acao'] === 'editar') {
        $controller->atualizar($_POST['tituloOriginal'], $_POST['novoTitulo'], $_POST['novoAutor'], $_POST['novoAno'], $_POST['novoGenero'], $_POST['novoQtde']);
    }

    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}


$lista = $controller->ler();


?>

<!-- Formulário em HTML -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Livros</title>
</head>
<body>
<h1>Gerenciamento de Livros</h1>
<br>
<hr>
    <form method="POST">
    <input type="hidden" name="acao" value="criar">
    <input type="text" name="titulo" placeholder="Titulo do Livro:" required>
    <select name="genero" required>
        <option value="">Selecione o Genero</option>
        <option value="Religioso">Religioso</option>
        <option value="Conto">Conto</option>
        <option value="Romance">Romance</option>
        <option value="Infantil">Infantil</option>
        <option value="Quadrinho">Quadrinho</option>
        <option value="Poesia">Poesia</option>
        <option value="Biografia">Biografia</option>
    </select>
    <input type="text" name="autor" placeholder="Nome do Autor:" required>
    <input type="number" name="ano" step="0.01" placeholder="Ano e publicação:" required>
    <input type="number" name="qtde" placeholder="Quantidade em estoque:" required>
    <button type="submit">Cadastrar</button>
    </form>


    <h2>Lista de Livros Cadastrados</h2>
    <table>
    <thead>
    <?php foreach ($lista as $livros): ?>
        <tbody>
            <?php echo "Titulo: " . $livros->getTitulo() . " | Autor: " . $livros->getAutor() . " | Ano: " . $livros->getAno() . " | Genero: " . $livros->getGenero(). " | Quantidade em estoque: " . $livros->getQtde(); ?>
            <form method="POST" style="display:inline;">
                <input type="hidden" name="acao" value="deletar">
                <input type="hidden" name="titulo" value="<?php echo $livros->getTitulo(); ?>">
                <button type="submit">Excluir</button>
            </form><br>

            <form method="POST" style="display:inline;">
                    <input type="hidden" name="acao" value="editar">
                    <input type="hidden" name="tituloOriginal" value="<?php echo $livros->getTitulo(); ?>">
                    <input type="" name="novoTitulo" value="<?php echo $livros->getTitulo(); ?>">
                    <select name="novoGenero" required>
                        <option value="">Selecione o Genero</option>
                        <option value="Religioso">Religioso</option>
                        <option value="Conto">Conto</option>
                        <option value="Romance">Romance</option>
                        <option value="Infantil">Infantil</option>
                        <option value="Quadrinho">Quadrinho</option>
                        <option value="Poesia">Poesia</option>
                        <option value="Biografia">Biografia</option>
                    </select>
                    <input type="" name="novoAutor" value="<?php echo $livros->getAutor(); ?>">
                    <input type="" name="novoAno" value="<?php echo $livros->getAno(); ?>">
                    <input type="" name="novoQtde" value="<?php echo $livros->getQtde(); ?>">
                    <button type="submit">Editar</button>
                </form>

        </tbody>
    </thead>
    </table>

    <style>
        table {
        width: 80%;
        margin: 20px auto;
        border-collapse: collapse;
        font-family: Arial, sans-serif;
        border: 2px solid #3498db; /* borda externa da tabela */
    }

    th, td {
        padding: 10px 15px;
        border: 1px solid #3498db; /* bordas internas */
        text-align: left;
    }

    th {
        background-color: #3498db;
        color: white;
    }

    tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    tbody tr:hover {
        background-color: #f1f1f1;
    }

    button {
        padding: 4px 8px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        font-size: 0.9em;
    }

    form[style*="display:inline;"] {
        display: inline-block;
        margin-right: 5px;
    }
    </style>

</body>
</html><?php endforeach; ?> 
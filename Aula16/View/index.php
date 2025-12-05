<?php

require_once __DIR__ . '/../Controller/LivrosController.php';

$controller = new LivrosController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['acao'] === 'criar') {
        // ... (código para criar) ...
        $controller->criar($_POST['titulo'], $_POST['autor'], $_POST['ano'], $_POST['genero'], $_POST['qtde']);
    } elseif ($_POST['acao'] === 'deletar') {
        // ... (código para deletar) ...
        $controller->deletar($_POST['titulo']);
    } elseif ($_POST['acao'] === 'editar') {
        // ... (código para editar) ...
        $controller->atualizar($_POST['tituloOriginal'], $_POST['novoTitulo'], $_POST['novoAutor'], $_POST['novoAno'], $_POST['novoGenero'], $_POST['novoQtde']);
    }

    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}

$lista = $controller->ler();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Livros</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Gerenciamento de Livros</h1>
    </header>

    <main>
        <section id="cadastro">
            <h2>Cadastrar Novo Livro</h2>
            <form method="POST" class="form-cadastro">
                <input type="hidden" name="acao" value="criar">
                <input type="text" name="titulo" placeholder="Título do Livro:" required>
                <select name="genero" required>
                    <option value="">Selecione o Gênero</option>
                    <option value="Religioso">Religioso</option>
                    <option value="Conto">Conto</option>
                    <option value="Romance">Romance</option>
                    <option value="Infantil">Infantil</option>
                    <option value="Quadrinho">Quadrinho</option>
                    <option value="Poesia">Poesia</option>
                    <option value="Biografia">Biografia</option>
                </select>
                <input type="text" name="autor" placeholder="Nome do Autor:" required>
                <input type="number" name="ano" placeholder="Ano de publicação (Ex: 2023):" required min="1000" max="<?php echo date("Y"); ?>">
                <input type="number" name="qtde" placeholder="Quantidade em estoque:" required min="0">
                <button type="submit" class="btn-primary">Cadastrar</button>
            </form>
        </section>

        <hr>

        <section id="listagem">
            <h2>Lista de Livros Cadastrados</h2>
            
            <?php if (empty($lista)): ?>
                <p class="alerta">Nenhum livro cadastrado.</p>
            <?php else: ?>
                <table>
                    <thead>
                        <tr>
                            <th>Título</th>
                            <th>Autor</th>
                            <th>Ano</th>
                            <th>Gênero</th>
                            <th>Estoque</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($lista as $livro): ?>
                            <tr>
                                <td data-label="Título"><?php echo htmlspecialchars($livro->getTitulo()); ?></td>
                                <td data-label="Autor"><?php echo htmlspecialchars($livro->getAutor()); ?></td>
                                <td data-label="Ano"><?php echo htmlspecialchars($livro->getAno()); ?></td>
                                <td data-label="Gênero"><?php echo htmlspecialchars($livro->getGenero()); ?></td>
                                <td data-label="Estoque"><?php echo htmlspecialchars($livro->getQtde()); ?></td>
                                <td data-label="Ações" class="acoes-celula">
                                    <form method="POST" class="form-acao deletar">
                                        <input type="hidden" name="acao" value="deletar">
                                        <input type="hidden" name="titulo" value="<?php echo htmlspecialchars($livro->getTitulo()); ?>">
                                        <button type="submit" class="btn-deletar">Excluir</button>
                                    </form>

                                    <button class="btn-editar-toggle" data-titulo="<?php echo htmlspecialchars($livro->getTitulo()); ?>">Editar</button>
                                </td>
                            </tr>
                            
                            <tr class="linha-edicao hidden" data-edicao-titulo="<?php echo htmlspecialchars($livro->getTitulo()); ?>">
                                <td colspan="6">
                                    <form method="POST" class="form-acao editar">
                                        <input type="hidden" name="acao" value="editar">
                                        <input type="hidden" name="tituloOriginal" value="<?php echo htmlspecialchars($livro->getTitulo()); ?>">
                                        
                                        <input type="text" name="novoTitulo" value="<?php echo htmlspecialchars($livro->getTitulo()); ?>" placeholder="Novo Título" required>
                                        <select name="novoGenero" required>
                                            <option value="">Gênero</option>
                                            <option value="Religioso" <?php echo ($livro->getGenero() == 'Religioso' ? 'selected' : ''); ?>>Religioso</option>
                                            <option value="Conto" <?php echo ($livro->getGenero() == 'Conto' ? 'selected' : ''); ?>>Conto</option>
                                            <option value="Romance" <?php echo ($livro->getGenero() == 'Romance' ? 'selected' : ''); ?>>Romance</option>
                                            <option value="Infantil" <?php echo ($livro->getGenero() == 'Infantil' ? 'selected' : ''); ?>>Infantil</option>
                                            <option value="Quadrinho" <?php echo ($livro->getGenero() == 'Quadrinho' ? 'selected' : ''); ?>>Quadrinho</option>
                                            <option value="Poesia" <?php echo ($livro->getGenero() == 'Poesia' ? 'selected' : ''); ?>>Poesia</option>
                                            <option value="Biografia" <?php echo ($livro->getGenero() == 'Biografia' ? 'selected' : ''); ?>>Biografia</option>
                                        </select>
                                        <input type="text" name="novoAutor" value="<?php echo htmlspecialchars($livro->getAutor()); ?>" placeholder="Novo Autor" required>
                                        <input type="number" name="novoAno" value="<?php echo htmlspecialchars($livro->getAno()); ?>" placeholder="Novo Ano" required min="1000" max="<?php echo date("Y"); ?>">
                                        <input type="number" name="novoQtde" value="<?php echo htmlspecialchars($livro->getQtde()); ?>" placeholder="Nova Quantidade" required min="0">
                                        <button type="submit" class="btn-confirmar-edicao">Salvar</button>
                                        <button type="button" class="btn-cancelar-edicao">Cancelar</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </section>
    </main>


    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('.btn-editar-toggle').forEach(button => {
                button.addEventListener('click', (e) => {
                    const titulo = e.target.getAttribute('data-titulo');
                    const linhaEdicao = document.querySelector(`.linha-edicao[data-edicao-titulo="${titulo}"]`);
                    if (linhaEdicao) {
                        linhaEdicao.classList.toggle('hidden');
                        e.target.textContent = linhaEdicao.classList.contains('hidden') ? 'Editar' : 'Ocultar Edição';
                    }
                });
            });

            document.querySelectorAll('.btn-cancelar-edicao').forEach(button => {
                button.addEventListener('click', (e) => {
                    const linhaEdicao = e.target.closest('.linha-edicao');
                    if (linhaEdicao) {
                        linhaEdicao.classList.add('hidden');
                        const titulo = linhaEdicao.getAttribute('data-edicao-titulo');
                        const toggleButton = document.querySelector(`.btn-editar-toggle[data-titulo="${titulo}"]`);
                        if(toggleButton) {
                            toggleButton.textContent = 'Editar';
                        }
                    }
                });
            });
        });
    </script>

</body>
</html>
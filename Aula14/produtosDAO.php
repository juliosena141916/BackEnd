<?php

namespace Aula14;
require_once "produto.php";

class produtosDAO{


    private $produtos = [];

    private $arquivo = "produtos.json";

    public function __construct(){
    if (file_exists($this->arquivo)){
        $conteudo = file_get_contents($this->arquivo);
        $dados = json_decode($conteudo, true);

        if($dados){
            foreach($dados as $codigo => $info){
                $this->produtos[$codigo] = new Produtos(
                    $info['código'],
                    $info['nome'],
                    $info['preço']
                );
            }
        }
    }
}

private function SalvaremArquivo(){
    $dados = [];

    foreach ($this->produtos as $codigo => $produtos){
        $dados[$codigo]=[
            'código' => $produtos->getCodigo(),
            'nome' => $produtos->getNome(),
            'preço' => $produtos->getPreco()
        ];
    }

    file_put_contents($this->arquivo, json_encode($dados, JSON_PRETTY_PRINT));
}

public function criarProduto(Produtos $produtos){
    $this->produtos[$produtos->getCodigo()]= $produtos;
    $this->SalvaremArquivo();
}

public function lerProduto(){
    return $this->produtos;
}

public function atualizarProduto($codigo, $novoNome, $novoPreco){
    if (isset($this->produtos[$codigo])){
        $this->produtos[$codigo]->setNome(nome: $novoNome);
        $this->produtos[$codigo]->setPreco(preco: $novoPreco);
    }
    $this->SalvaremArquivo();
}

public function excluirProduto($codigo){
    unset($this->produtos[$codigo]);
    $this->SalvaremArquivo();
}

}
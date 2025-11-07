<?php


require_once "bebidas.php";

class BebidasDAO{


    private $bebidas = [];

    private $arquivo = "bebidas.json";

    public function __construct(){
    if (file_exists($this->arquivo)){
        $conteudo = file_get_contents($this->arquivo);
        $dados = json_decode($conteudo, true);

        if($dados){
            foreach($dados as $nome => $info){
                $this->bebidas[$nome] = new Bebidas(
                    $info['nome'],
                    $info['Categoria'],
                    $info['volume'],
                    $info['valor'],
                    $info['qtde']
                );
            }
        }
    }
}

private function SalvaremArquivo(){
    $dados = [];

    foreach ($this->bebidas as $nome => $bebidas){
        $dados[$nome]=[
            'nome' => $bebidas->getNome(),
            'Categoria' => $bebidas->getCategoria(),
            'volume' => $bebidas->getVolume(),
            'valor' => $bebidas->getValor(),
            'qtde' => $bebidas->getQtde()
        ];
    }

    file_put_contents($this->arquivo, json_encode($dados, JSON_PRETTY_PRINT));
}

public function criarBebida(Bebidas $bebidas){
    $this->bebidas[$bebidas->getNome()]= $bebidas;
    $this->SalvaremArquivo();
}

public function lerBebida(){
    return $this->bebidas;
}

public function atualizarBebidas($nome, $novoValor, $novaQtde){
            if(isset($this->bebidas[$nome])){
                $this->bebidas[$nome]->setValor($novoValor);
                $this->bebidas[$nome]->setQtde($novaQtde);
            }
            $this->salvaremArquivo();
        }

public function excluirBebida($nome){
    unset($this->bebidas[$nome]);
    $this->SalvaremArquivo();
}

}
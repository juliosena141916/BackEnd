<?php

class alunoDAO{

private $alunos = [];
private $arquivo = "alunos.json";

public function __construct(){
    if (file_exists($this->arquivo)){
        $conteudo = file_get_contents($this->arquivo);
        $dados = json_decode($conteudo, true);

        if($dados){
            foreach($dados as $id => $info){
                $this->alunos[$id] = new Aluno(
                    $info['id'],
                    $info['nome'],
                    $info['curso']
                );
            }
        }
    }
}

private function SalvaremArquivo(){
    $dados = [];

    foreach ($this->alunos as $id => $aluno){
        $dados[$id]=[
            'id' => $aluno->getId(),
            'nome' => $aluno->getNome(),
            'curso' => $aluno->getCurso()
        ];
    }

    file_put_contents($this->arquivo, json_encode($dados, JSON_PRETTY_PRINT));
}

//CREATE
public function criarAluno(Aluno $aluno){
    $this->alunos[$aluno->getId()]= $aluno;
    $this->SalvaremArquivo();
}

public function lerAluno(){
    return $this->alunos;
}

public function atualizarAluno($id, $novoNome, $novoCurso){
    if (isset($this->alunos[$id])){
        $this->alunos[$id]->setNome(nome: $novoNome);
        $this->alunos[$id]->setCurso(curso: $novoCurso);
    }
    $this->SalvaremArquivo();
}

public function excluirAluno($id){
    unset($this->alunos[$id]);
    $this->SalvaremArquivo();
}

}
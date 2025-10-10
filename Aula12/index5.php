<?

class usuarios{
    public $nome;
    public $idade;

    public function __construct($nome, $idade){
        $this->nome=$nome;
        $this->idade=$idade;
    }

    public function emprestar(){
        return "Emprestou um livro";
    }
}

class livros{
    public $nome;

    public function __construct($nome){
        $this->nome=$nome;
    }
}
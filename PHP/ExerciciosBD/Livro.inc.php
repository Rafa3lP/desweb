<?php
class Livro {
    public $titulo;
    public $descricao;
    public $isbn;
    public $edicao;
    public $ano;

    function __construct($titulo, $descricao, $isbn, $edicao, $ano){
        $this->titulo = $titulo;
        $this->descricao = $descricao;
        $this->isbn = $isbn;
        $this->edicao = $edicao;
        $this->ano = $ano;
    }
}
?>
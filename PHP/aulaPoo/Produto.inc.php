<?php

class Produto {
    // private $nome;
    // private $marca;
    // private $preco;
    // private $quantidade;

    // function __construct($nome, $marca, $preco, $quantidade){
    //     $this->nome = $nome;
    //     $this->marca = $marca;
    //     $this->preco = $preco;
    //     $this->quantidade = $quantidade;
    // }

    function __construct(
        private $nome,
        private $marca,
        private $preco,
        private $quantidade
    ){}

    function calcularTotal() {
        if($this->quantidade > 0) {
            return $this->preco * $this->quantidade;
        }
        return $this->preco;
    }

    function getNome() {
        return $this->nome;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }
}

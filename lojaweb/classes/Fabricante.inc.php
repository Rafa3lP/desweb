<?php
class Fabricante
{
    private $codigo;
    private $nome;
    private $logradouro;
    private $cep;
    private $ramo;
    private $cidade;
    private $email;

    function __construct()
    {

    }

    function setFabricante($nome, $logradouro, $cep, $ramo, $cidade, $email)
    {
        $this->nome = $nome;
        $this->logradouro = $logradouro;
        $this->cep = $cep;
        $this->ramo = $ramo;
        $this->cidade = $cidade;
        $this->email = $email;
    }

    //GETTERS
    public function getCodigo(){
        return $this->codigo;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getLogradouro(){
        return $this->logradouro;
    }
    public function getCep(){
        return $this->cep;
    }
    public function getRamo(){
        return $this->ramo;
    }
    public function getCidade(){
        return $this->cidade;
    }
    public function getEmail(){
        return $this->email;
    }

    //SETTERS
    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setLogradouro($logradouro){
        $this->logradouro = $logradouro;
    }
    public function setCep($cep){
        $this->cep = $cep;
    }
    public function setRamo($ramo){
        $this->ramo = $ramo;
    }
    public function setCidade($cidade){
        $this->cidade = $cidade;
    }
    public function setEmail($email){
        $this->email = $email;
    }

}
?>
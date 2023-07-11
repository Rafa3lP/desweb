<?php
class Cliente
{
    private $cpf;
    private $nome;
    private $logradouro;
    private $cidade;
    private $estado;
    private $cep;
    private $telefone;
    private $data_nascimento;
    private $email;
    private $senha;
    private $rg;

    private $perfil;

    function __construct()
    {

    }

    function setCliente($cpf, $nome, $logradouro, $cidade, $estado, $cep, $telefone, $data_nascimento, $email, $senha, $rg, $perfil)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->logradouro = $logradouro;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->cep = $cep;
        $this->telefone = $telefone;
        $this->data_nascimento = strtotime(str_replace("/", "-", $data_nascimento));
        $this->email = $email;
        $this->senha = $senha;
        $this->rg = $rg;
        $this->perfil = $perfil;
    }

    //GETTERS
    public function getCpf(){
        return $this->cpf;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getLogradouro(){
        return $this->logradouro;
    }

    public function getCidade(){
        return $this->cidade;
    }

    public function getEstado(){
        return $this->estado;
    }

    public function getCep(){
        return $this->cep;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function getDataNascimento(){
        return $this->data_nascimento;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function getRg(){
        return $this->rg;
    }

    public function getEndereco(){
        return $this->logradouro . ", " . $this->cidade . " - " . $this->estado . ", CEP: " . $this->cep;
    }

    public function getPerfil(){
        return $this->perfil;
    }

    //SETTERS
    public function setCpf($cpf){
        $this->cpf = $cpf;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setLogradouro($logradouro){
        $this->logradouro = $logradouro;
    }

    public function setCidade($cidade){
        $this->cidade = $cidade;
    }

    public function setEstado($estado){
        $this->estado = $estado;
    }

    public function setCep($cep){
        $this->cep = $cep;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    public function setDataNascimento($data_nascimento){
        $this->data_nascimento = strtotime($data_nascimento);
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function setRg($rg){
        $this->rg = $rg;
    }

    public function setPerfil($perfil){
        $this->perfil = $perfil;
    }

}
?>
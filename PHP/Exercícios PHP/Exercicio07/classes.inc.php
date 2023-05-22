<?php 
class Usuario {
    private string $nome;
    private string $login;
    private string $senha;
    private ?DateTime $dataLogin;

    public function __construct(string $nome, string $login, string $senha){
        $this->nome = $nome;
        $this->login = $login;
        $this->senha = $senha;
    }

    private function validarSenha(string $senha): bool {
        return !empty($senha) && strlen($senha) === 6;
    }

    private function validarLogin(string $login): bool {
        return !empty($login) && strpos($login, '@') !== false && str_ends_with($login, ".br");
    }

    public function efetuarLogin(string $login, string $senha): bool {
        if($this->validarLogin($login) && $this->validarSenha($senha))
            return false;

        if ($login === $this->login && $senha === $this->senha) {
            $this->dataLogin = new DateTime();
            return true;
        }
        
        return false;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    public function getLogin(): string {
        return $this->login;
    }

    public function getDataLogin(): DateTime {
        return $this->dataLogin;
    }

}
?>
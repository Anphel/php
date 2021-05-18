<?php

class Login
{
    protected string $email;
    protected string $senha;

    public function __construct(string $email, string $senha,)
    {
        $this->email = $email;
        $this->senha = $senha;
    }
    public function validaLogin():bool{
        $banco = new Banco();
        $dados = $banco->lerDados();

        foreach ($dados as $contas){

            if($contas['Email'] === $this->email){

                if($contas['Senha'] === $this->senha){

                    echo('Logado com sucesso!'.PHP_EOL);
                    return true;
                }else echo 'Falha ao logar, tente novamente.';
            }
        }
        return false;
    }
}
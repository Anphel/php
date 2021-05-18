<?php

class Login
{
    protected string $email;
    protected string $password;

    public function __construct(string $email, string $password,)
    {
        $this->email = $email;
        $this->password = $password;
    }
    public function validaLogin():bool{
        $user = new User();
        $dados = $user->getUserList();

        foreach ($dados as $contas){

            if($contas['Email'] === $this->email){

                if($contas['Senha'] === $this->password){

                    echo('Logado com sucesso!'.PHP_EOL);
                    return true;
                }else echo 'Falha ao logar, tente novamente.';
            }
        }
        return false;
    }
}
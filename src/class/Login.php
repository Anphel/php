<?php

class Login
{
    protected string $email;
    protected string $senha;
    protected Banco $dados;

    public function __construct(string $email, string $senha, Banco $dados)
    {
        $this->email = $email;
        $this->senha = $senha;
        $this->dados = $dados;
    }

    public function validaLogin ():bool{
        foreach ($this->dados->getDados() as $contas){

           if($contas->getemail() === $this->email){

               if($contas->getSenha() === $this->senha){

                   echo('Logado com sucesso!'.PHP_EOL);
                   return true;
               }
           }
        }

        echo('Dados incorretos, tente novamente!'.PHP_EOL);
        return false;
    }
}
<?php


class Login
{
    protected string $email;
    protected string $senha;
    protected Banco $dados;

    public function __construct(string $email, string $senha)
    {
        $this->email = $email;
        $this->senha = $senha;
    }

    public function validaLogin (array $dados):bool{
        foreach ($dados as $dados_k => $dados_v)
        echo "Dados :  $dados_k : \n";
            foreach ($dados_v as $data_k => $data_v){
                echo "\t Eita: $data_k = $data_v :";
            }
        var_dump($dados);

        return true;
    }
}
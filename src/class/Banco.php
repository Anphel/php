<?php


class Banco
{
    protected array $dados ;
    public function __construct(array $dados)
    {
        $this->dados = $dados;
    }

    public function getDados(): array
    {
        return $this->dados;
    }

}
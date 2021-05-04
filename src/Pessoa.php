<?php

class Pessoa
{
    protected string $nome;
    protected string $cpf;
    protected string $email;

    public function __construct(string $nome, string $cpf, string $email)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->email = $email;;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function setCpf(string $cpf): void
    {
        $this->cpf = $cpf;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }


}
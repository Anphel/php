<?php

class Pessoa

{
    protected string $nome;
    protected CPF $cpf;
    protected string $email;
    protected string $senha;

    public function __construct(string $nome, CPF $cpf, string $email, string $senha)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->senha = $senha;
    }
    public function getNome(): string
    {
        return $this->nome;
    }
    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }
    public function getCpf(): CPF
    {
        return $this->cpf;
    }
    public function setCpf(CPF $cpf): void
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
    public function getSenha(): string
    {
        return $this->senha;
    }
    public function setSenha(string $senha): void
    {
        $this->senha = $senha;
    }

}
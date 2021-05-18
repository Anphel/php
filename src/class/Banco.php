<?php


class Banco
{
    private mysqli $mysql;
    public function __construct(){
        $this->mysql = $mysql = new mysqli('localhost', 'root', '', 'test');
        $mysql->set_charset('utf8');
        if ($mysql == FALSE) {
            echo 'Erro!';
        }
    }

    public function insereDados(Pessoa $pessoa):void
    {
        $nome = $pessoa->getNome();
        $cpf = $pessoa->getCpf();
        $email = $pessoa->getEmail();
        $senha = $pessoa->getSenha();
        $insereDados = $this->mysql->prepare(
            "
                INSERT INTO `pessoas`(`Nome`, `CPF`, `Email`, `Senha`)
                VALUES(?,?,?,?)");
        $insereDados->bind_param('ssss',$nome,$cpf,$email,$senha);
        if ($insereDados->execute() == TRUE){
            echo "Usuario registrado com sucesso.";
        }else echo "Erro, tente novamente!";

    }
    public function lerDados()
    {
        $result = $this->mysql->query("SELECT * FROM `pessoas`");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function deletarUsuario(string $nome)
    {
        $deletaDados = $this->mysql->prepare(
            "
                DELETE FROM `pessoas` WHERE Nome = ?");
        $deletaDados->bind_param('s',$nome);
        if ($deletaDados->execute() == TRUE){
            echo "Usuario deletado com sucesso.";
        }else echo "Erro, tente novamente!";

    }



}
<?php


class User
{
    public function createUser(Pessoa $pessoa):void
    {
        $mysqli = ConectionCreator::createConnection();
        $nome = $pessoa->getNome();
        $cpf = $pessoa->getCpf();
        $email = $pessoa->getEmail();
        $senha = $pessoa->getSenha();
        $insereDados = $mysqli->prepare(
            "
                INSERT INTO `pessoas`(`Nome`, `CPF`, `Email`, `Senha`)
                VALUES(?,?,?,?)");
        $insereDados->bind_param('ssss',$nome,$cpf,$email,$senha);
        if ($insereDados->execute() == TRUE){
            echo "Usuario registrado com sucesso.";
        }else echo "Erro, tente novamente!";

    }

    public function getUserList()
    {
        $mysqli = ConectionCreator::createConnection();
        $result = $mysqli->query("SELECT * FROM `pessoas`");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function deleteUser(string $nome)
    {
        $mysqli = ConectionCreator::createConnection();
        $deletaDados = $mysqli->prepare(
            "
                DELETE FROM `pessoas` WHERE Nome = ?");
        $deletaDados->bind_param('s',$nome);
        $deletaDados->execute();
        if ( $deletaDados->affected_rows >= 1){
            echo "Usuario deletado com sucesso.";
        }else echo "Erro, tente novamente!";

    }
}
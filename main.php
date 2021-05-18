<?php
require 'src/class/Banco.php';
require 'src/class/Login.php';
require 'src/class/Pessoa.php';
require 'src/class/CPF.php';

$banco = new Banco();
//$pessoa = new Pessoa('Jessica Maiara',new CPF('155.411.199-57'),'jekika10@hotmail.com','12345');
//$banco->insereDados($pessoa);

//$login = new Login('jekika10@hotmail.com', '12345');
//$login->validaLogin();
$banco->deletarUsuario('Gabriel');

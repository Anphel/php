<?php

require_once 'src/class/Banco.php';
require_once 'src/class/CPF.php';
require_once 'src/class/Pessoa.php';
require_once 'src/class/Login.php';



$pessoa = new Pessoa('Andre',new CPF('100.123.524-60') , 'andreph10@hotmail.com','123456');
$pessoa2 = new Pessoa('Jessica',new CPF('100.456.139-70') , 'jeca@hotmail.com','123456');
$pessoa3 = new Pessoa('Felipe',new CPF('100.731.139-98') , 'titi@hotmail.com','123456');

$banco = [$pessoa,$pessoa2,$pessoa3];
$dados = new Banco($banco);

$dados2 = $dados->getDados();

$login = new Login('andreph10@hotmail.com', '123456');

$valida_login = $login->validaLogin($dados2);
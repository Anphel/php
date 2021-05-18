<?php
require 'src/Infrastucture/ConectionCreator.php';
require 'src/class/User.php';
require 'src/class/Login.php';
require 'src/class/Pessoa.php';
require 'src/class/CPF.php';

$user = new User();
//$user->deleteUser('Jessica Maiara');
//$pessoa = new Pessoa('Jessica Maiara',new CPF('155.411.199-57'),'jekika10@hotmail.com','12345');
//$user->createUser($pessoa);

$login = new Login('jekika10@hotmail.com', '12345');
$login->validaLogin();


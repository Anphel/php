<?php

require_once 'src/class/Banco.php';
require_once 'src/class/CPF.php';
require_once 'src/class/Pessoa.php';
require_once 'src/class/Login.php';

$pessoa = new Pessoa(
    'Andre',
    new CPF('120.143.524-60'),
    'andreph10@hotmail.com',
    '2343');
$pessoa2 = new Pessoa(
    'Jessica',
    new CPF('100.112.334-60'),
    'andreph10@hail.com',
    '5134');
$pessoa3 = new Pessoa(
    'Felipe',
    new CPF('153.213.789-60'),
    'andreph10@otmail.com',
    '23466');

$dados = new Banco($dados= [$pessoa,$pessoa2,$pessoa3]);

$login = new Login('andreph10@otmail.com', '23466',$dados);
$valida_login = $login->validaLogin();

<?php


class ConectionCreator
{
    public static function createConnection (): mysqli
    {
        $mysql = new mysqli('localhost', 'root', '', 'test');
        $mysql->set_charset('utf8');
        if ($mysql == FALSE) {
            echo 'Erro!';
        }
        return $mysql;
    }
}
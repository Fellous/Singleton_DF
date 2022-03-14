<?php


class serciceConnect

{

    public function getConnect() {

        try
{
    $db = new PDO('mysql:host=127.0.0.1;port=3306;dbname=bddqcm',
        'root',
        '',
        array( PDO::ATTR_PERSISTENT => false, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
    );
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
    }
}
?>
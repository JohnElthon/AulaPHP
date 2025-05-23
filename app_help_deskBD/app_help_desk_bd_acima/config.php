<?php
 //require_onde "validador_acesso.php"

 define('HOST','127.0.0.1');
 define('USER','root');
 define('PASS','');
 define('BASE','helpdesk');

 //Criar a string de conexao
$conexao = new mysqli(HOST,USER,PASS,BASE);
$conexao -> set_charset("utf8mb4");

?>
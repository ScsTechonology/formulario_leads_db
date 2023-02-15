<?php
//CRENDENCIAIS ACESSO BANDO DE DADOS

 define('HOST', 'localhost');
 define('USER','root');
 define('PASS','');
 define('DBNAME','csc_digital_business');

 $conn = new PDO('mysql:host='. HOST .'; dbname=' . DBNAME.';', USER, PASS);
?>
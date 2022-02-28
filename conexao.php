<?php
$Servidor = 'localhost';
$nomeBanco = 'cadastro'; /* database */
$Usuario = 'root'; /* Usuario */
$Senha = ''; /* senha */
$pdo = new PDO("mysql:dbname=".$nomeBanco.";host=".$Servidor ,$Usuario, $Senha);
?>
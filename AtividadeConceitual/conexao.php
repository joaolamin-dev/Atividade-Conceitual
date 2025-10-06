<?php
$servidor = "127.0.0.1";
$usuario  = "root";
$senha    = "usbw";
$banco    = "Folha_Pagto";

$conecta_db = mysql_connect($servidor, $usuario, $senha) or die("Erro na conexão: " . mysql_error());
mysql_select_db($banco, $conecta_db) or die("Erro ao selecionar banco: " . mysql_error());
?>

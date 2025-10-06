<?php
include("conexao.php");

$id = $_GET['id'];

$sql = "DELETE FROM tb_funcionarios WHERE N_Registro = $id";
$result = mysql_query($sql) or die("Erro ao excluir: " . mysql_error());

echo "<script>alert('Funcionário excluído com sucesso!');window.location='listagem.php';</script>";
?>

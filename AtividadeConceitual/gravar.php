<?php
include("conexao.php");
date_default_timezone_set('America/Sao_Paulo');


$nome   = $_POST['Nome_Funcionario'];
$data   = $_POST['data_admissao'];
$cargo  = $_POST['cargo'];
$qtde   = $_POST['qtde_salarios'];

$salario_minimo = 1412.00;
$salario_bruto  = $qtde * $salario_minimo;

// Cálculo do INSS
if ($salario_bruto > 1550.00) {
    $valor_inss = $salario_bruto * 0.11;
    $desc_inss  = number_format($valor_inss, 2, '.', '');
    $salario_liquido = $salario_bruto - $valor_inss;
    $inss = "R$ " . $desc_inss;
} else {
    $inss = "Isento";
    $salario_liquido = $salario_bruto;
}

$sql = "INSERT INTO tb_funcionarios 
        (Nome_Funcionario, data_admissao, cargo, qtde_salarios, salario_bruto, inss, salario_liquido)
        VALUES ('$nome', '$data', '$cargo', '$qtde', '$salario_bruto', '$inss', '$salario_liquido')";

$result = mysql_query($sql) or die("Erro ao gravar: " . mysql_error());

echo "<script>alert('Funcionário cadastrado com sucesso!');window.location='listagem.php';</script>";
?>

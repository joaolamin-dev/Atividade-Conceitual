<?php
include("conexao.php");
date_default_timezone_set('America/Sao_Paulo');


$filtro = "";
if (isset($_POST['filtro'])) {
    $nome = $_POST['nome'];
    $filtro = "WHERE Nome_Funcionario LIKE '%$nome%'";
}
$sql = "SELECT * FROM tb_funcionarios $filtro ORDER BY N_Registro ASC";
$result = mysql_query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Demonstrativo de Rendimentos</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <h2>DEMONSTRATIVO DE RENDIMENTOS MENSAIS</h2>
    <form method="post" action="listagem.php">
        DIGITE O NOME DO FUNCIONÁRIO: 
        <input type="text" name="nome">
        <input type="submit" name="filtro" value="FILTRAR">
        <a href="home_funcionarios.php">VOLTAR</a>
    </form>
    <br>

    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>Nº REGISTRO</th>
            <th>NOME FUNCIONÁRIO</th>
            <th>DATA ADMISSÃO</th>
            <th>CARGO</th>
            <th>SALÁRIO BRUTO</th>
            <th>INSS</th>
            <th>SALÁRIO LÍQUIDO</th>
            <th>APAGAR</th>
        </tr>

        <?php while($linha = mysql_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $linha['N_Registro']; ?></td>
            <td><?php echo $linha['Nome_Funcionario']; ?></td>
            <td><?php echo date('d/m/Y', strtotime($linha['data_admissao'])); ?></td>
            <td><?php echo $linha['cargo']; ?></td>
            <td>R$ <?php echo number_format($linha['salario_bruto'], 2, ',', '.'); ?></td>
            <td><?php echo $linha['inss']; ?></td>
            <td>R$ <?php echo number_format($linha['salario_liquido'], 2, ',', '.'); ?></td>
            <td><a href="excluir.php?id=<?php echo $linha['N_Registro']; ?>" onclick="return confirm('Deseja excluir este funcionário?')">X</a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>

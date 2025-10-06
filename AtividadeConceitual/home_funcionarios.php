<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cadastro de Funcionários</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <h2>CADASTRO DE FUNCIONÁRIOS</h2>
    <form method="post" action="gravar.php">
        <fieldset>
            <legend>DADOS DO FUNCIONÁRIO</legend>

            <label>Nº REGISTRO</label><br>
            <input type="text" disabled><br><br>

            <label>NOME DO FUNCIONÁRIO</label><br>
            <input type="text" name="Nome_Funcionario" required><br><br>

            <label>DATA DE ADMISSÃO</label><br>
            <input type="date" name="data_admissao" required><br><br>

            <label>CARGO</label><br>
            <select name="cargo" required>
                <option value="">Selecione...</option>
                <option value="Auxiliar Administrativo">Auxiliar Administrativo</option>
                <option value="Analista de Projetos">Analista de Projetos</option>
                <option value="Analista de Suporte">Analista de Suporte</option>
                <option value="Programador Jr.">Programador Jr.</option>
                <option value="Analista de Sistemas">Analista de Sistemas</option>
                <option value="Gerente de Projetos">Gerente de Projetos</option>
            </select><br><br>

            <label>QTDE DE SALÁRIOS MÍNIMOS</label><br>
            <input type="number" name="qtde_salarios" required><br><br>
        </fieldset>

        <input type="submit" value="CADASTRAR">
        <a href="listagem.php">VISUALIZAR DEMONSTRATIVOS DE PAGAMENTOS</a>
    </form>
</body>
</html>

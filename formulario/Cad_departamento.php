<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco O14</title>
    <link rel="stylesheet" type="text/css" href="../estilo/geral.css">
</head>
<body>
    <form method="post" action="inserir_departamento.php">
        <fieldset>
            <Legend><h3>Cadastro de departamento</h3></legend>
            <label>Cadastro de departamento</label>
            <input type="text" name="txt_departamento" require><br>
            <label>Departamento</label>
            <?php require_once ("../modulo/select_departamento.php");?><br>
            <input type="submit" value="Cadastrar">
        </fieldset>
    </form>
</body>
</html>
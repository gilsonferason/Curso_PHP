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
    <form method="post" action="inserir_cliente.php">
        <fieldset>
            <Legend><h3>Cadastro de cliente</h3></legend>
            <label>Cadastro de cliente</label>
            <input type="text" name="txt_nome" require><br>
            <label>Bairro</label>
            <?php require_once ("../modulo/select_bairro.php");?><br>
            <input type="submit" value="Cadastrar">
        </fieldset>
    </form>
</body>
</html>
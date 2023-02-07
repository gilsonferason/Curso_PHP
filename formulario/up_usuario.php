<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../estilo/geral.css">
    <title>Banco O 14</title>
</head>
    <body>
        <form method="post" action="../controle/atualizar_usuario.php">
            <fieldset><legend><h3>Atualizar usuarios</h3></legend>
                <label>Escolha o usuario a ser atualizado</label><br><br>
                <?php require_once("../modulo/select_usuario.php");?><br><br>
                <label>Digite o novo nome para o usuario</label><br><br>
                <input type="text" name="txt_usuario"><br><br>
                <input type="submit" value="Atualizar">
            </fieldset>
        </form>
    </body>
</html>
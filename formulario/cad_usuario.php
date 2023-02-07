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
        <form method="post" action="../controle/inserir_usuario.php">
            <fieldset>
                <legend><h3>Cadastro de Usuario</h3></legend>
                <label>Usuario:</label><br><input type="text" name="txt_user" value="teste"  required><br>
                <label>Bairro: </label><br><?php require_once("../modulo/select_bairro.php");?><br>
                <label>E-mail: </label><br><input type="email" name="txt_mail" value="nome@serivdor.com" required><br>
                <label>Senha: </label><br><input type="password" name="txt_pass" required><br>
                <label>Confirmar Senha:</label><br><input type="password" name="txt_conf" required><br>
                <input type="submit" value="Cadastrar"<br>
            </fieldset>
        </form>
    </body>
</html>
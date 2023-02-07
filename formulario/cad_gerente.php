<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta chaset="UTF-8">
    <meta http-equiv="X-UA-Compatible" contect="IE=edge">
    <meta name="viewport"="idth=device-width, initial-sacale=1.0">
    <title>Banco O14</title>
    <link rel="stylesheet" type="text/css" href="../estilo/geral.css">
</head>
<body>
    <form method="post" action="../controle/inserir_gerente.php">
        <fieldset>
            <Legend><h3>Cadastro de gerente</h3></legend>
            <label>Nome do gerente</label>
            <input type="text" name="txt_gerente" require><br>
            <label>Bairro do gerente</label>
            <?PHP require_once ("../modulo/select_bairro.php");?><br>
            <input type="submit" value="Cadastrar">
     </fieldset>
    </form>
</body>
</html>
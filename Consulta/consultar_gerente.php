<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Banco O14</title>
        <link rel="stylesheet" type="text/css" href="../estilo/geral.css">
    </head>
<body>
    <h1>Gerentes</h1>
    <div class="flex-container">
    <div id="box">
    <fieldset>
        <table border="1"><tr><th width="50%">Gerentes</th><th>Bairros</th></tr>
        <?php
        include("../controle/conexao.php");
        $conn = conectar();
        try{
            $sql = "SELECT c.nome_gerente, b.nome_bairro FROM gerente c
            INNER JOIN bairro b ON c.bairro_gerente=b.cod_bairro";
            foreach ($conn->query($sql)as $ row){
                print "<tr><td>".$row['nome_bairro']."</td></tr>";
            }
        }catch(PDOException $es){
            echo 'Erro na consultar_gerente'.$ex->getMesage();
        }
        ?></table><br><a href='/eibe/banco_o14'>voltar</a></fieldset></div></div></body></html>
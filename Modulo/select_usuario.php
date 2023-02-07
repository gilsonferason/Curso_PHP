<?php
 include ("../controle/conexao.php");
    $conn = conectar();
    $sql = 'SELECT * FROM usuario';
    print "<select name='cbx_usuario'>";
foreach ($conn->query($sql) as $row) {
    print "<option value='".$row['cod_usuario']."'>".$row['nome_bairro']."</option>";
}
print"</select>";
?>
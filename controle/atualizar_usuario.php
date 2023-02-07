<?php
include("conexao.php");
$conn = conectar();

try{
    $cod_usuario = $_POST['cbx_user'];
    $up_usuario = $_POST['txt_user'];
    var_dump($cod_usuario);
    $sql ="UPDATE usuario SET nome_usuario='$up_usuario' WHERE cod_usuario=$cod_usuario";
    $conn->query($sql);
    echo'<script>
    alert("Registro salvo com sucesso!");
    window.location.href = "../index.html";
    </script>';
}catch(PDOException $ex){
echo 'Erro Atualiza usuario, Chama o Gilson, Gilson chama os macacos!!!'.$ex->getMessage();
}
?>
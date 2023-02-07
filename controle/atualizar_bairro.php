<?php
include("conexao.php");
$conn = conectar();

try{
    $cod_bairro = $_POST['cbx_bairro'];
    $up_bairro = $_POST['txt_bairro'];
    var_dump($cod_bairro);
    $sql ="UPDATE bairro SET nome_bairro='$up_bairro' WHERE cod_bairro=$cod_bairro";
    $conn->query($sql);
    echo'<script>
    alert("Registro salvo com sucesso!");
    window.location.href = "../index.html";
    </script>';
}catch(PDOException $ex){
echo 'Erro Atualiza Bairro, Chama o Gilson, Gilson chama os macacos!!!'.$ex->getMessage();
}
?>
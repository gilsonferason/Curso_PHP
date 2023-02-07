<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Banco O14</title>
</head>
<body>
<?php
include("conexao.php");
$conn = conectar();
try{
	$departamento = $_POST['txt_departamento'];
if(isset($departamento)){
	$stmt = $conn->prepare("INSERT INTO departamento(nome_departamento) values (?)");
	$stmt ->bindValue(1,$departamento,PDO::PARAM_STR);
	$stmt->execute();
	}
	echo'<script>
		alert("Registro salva com sucesso");
		window.location.href = "../formulario/cad_departamento.php";
		</script>';
}catch(PDOException $ex_){
		echo 'socorro, chamem os macaos' .$ex_->getMessage();
}
?>
</body>
</html>
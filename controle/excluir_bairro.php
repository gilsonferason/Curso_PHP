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
	try {
		$bairro = $_POST['cbx_bairro'];
		if (isset($bairro)){
			$stmt = $conn->prepare("DELETE FROM bairro WHERE cod_bairro=(?)");
			$stmt->bindValue(1, $bairro, PDO::PARAM_STR);
			$stmt->execute();
		}
		echo '<script>
		alert("Registro apagado com sucesso");
		window.location.href = "../formulario/cad_bairro.php";
		</script>';
	} catch (PDOException $ex_) {
		echo 'erro em excluir_bairro, chame o Gilson' . $ex_->getMessage();
	}
	?>
</body>

</html>
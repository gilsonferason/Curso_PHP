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
		$bairro = $_POST['txt_bairro'];
		if (isset($bairro)) {
			$stmt = $conn->prepare("INSERT INTO bairro(nome_bairro) values (?)");
			$stmt->bindValue(1, $bairro, PDO::PARAM_STR);
			$stmt->execute();
		}
		echo '<script>
		alert("Registro salva com sucesso");
		window.location.href = "../formulario/cad_bairro.php";
		</script>';
	} catch (PDOException $ex_) {
		echo 'socorro, chamem os macaos' . $ex_->getMessage();
	}
	?>
</body>

</html>
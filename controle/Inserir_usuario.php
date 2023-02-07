<?php
include("conexao.php");
$conn = conectar();

$user = $_POST['txt_user'];
$bairro = $_POST['cbx_bairro'];
$mail = $_POST['txt_mail'];
$pass = md5($_POST['txt_pass']);
$conf = md5($_POST['txt_conf']);

try{
	if($pass<>$conf){
		echo'<script>
		alert("Senhas não conferem, Usuário não cadastro");
		window.location.href = "../formulario/cad_usuraio.php";
	</script>';
	}else{
		$sql = ("INSERT INTO usuario(nome_usuario,bairro_usuario,senha,email) VALUES (?,?,?,?)");
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(1,$user,PDO::PARAM_STR);
		$stmt->bindValue(2,$bairro,PDO::PARAM_STR);
		$stmt->bindValue(3,$pass,PDO::PARAM_STR);
		$stmt->bindValue(4,$mail,PDO::PARAM_STR);
		$stmt->execute();
	echo'<script>
		alert("Registro salvo com sucesso");
		window.location.href = "../formulario/cad_usuario.php";
		</script>';
}
}catch(PDOException $ex_){
		echo 'Erro em Inserir_usuario!!!!' .$ex_->getMessage();
}
?>
<?php
session_start();
include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Produtos</title>		
	</head>
	<body>
		<h1>Produtos</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		
		
		$result_usuarios = "SELECT * FROM arquivos";
		$resultado_usuarios = mysqli_query($conexao, $result_usuarios);
		while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
			echo "Arquivo: " . $row_usuario['nome_arquivo'] . "<br>";
			echo "Disciplina: " . $row_usuario['disciplina'] . "<br>";
			echo "Descrição: " . $row_usuario['descricao'] . "<br><hr>";
		}
		
		
		
		?>		
	</body>
</html>
<?php
include ('conexao.php');

$titulo = mysqli_real_escape_string ($conexao, trim($_POST['titulo']));
$numero = mysqli_real_escape_string ($conexao, trim($_POST['numero']));
$validade = mysqli_real_escape_string  ($conexao, trim($_POST['validade']));
$cvv = mysqli_real_escape_string ($conexao, trim($_POST['cvv']));


$result_contato = "INSERT INTO cartao (titulo, numero, validade, cvv) VALUES ('$titulo', '$numero', '$validade', '$cvv')";
$resultado_contato = mysqli_query($conexao, $result_contato);

if(mysqli_insert_id($conexao)){
    $_SESSION['msg'] = "<p style='color:green;'>Cartão cadastrado com sucesso</p>";
    header("Location: perfiluser.php");
}
else{
    $_SESSION['msg'] = "<p style='color:red;'>Cartão não cadastrado</p>";
    header("Location: perfiluser.php");
}
?>
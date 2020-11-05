<?php
include ('conexao.php');

$parcelas = mysqli_real_escape_string ($conexao, trim($_POST['parcelas']));



$result_contato = "INSERT INTO pedidos (parcelas) VALUES ('$parcelas')";
$resultado_contato = mysqli_query($conexao, $result_contato);

if(mysqli_insert_id($conexao)){
    
    header("Location: pagcartao.php");
}
else{
    
    header("Location: checkout.php");
}
?>
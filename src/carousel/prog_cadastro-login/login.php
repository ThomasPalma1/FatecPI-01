<?php
session_start();
include ('conexao.php');

if (empty( $_POST ['email']) || empty ($_POST['password'])) {
    header ('Location:index.php');
    exit();
} 

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao,$_POST['password']);

$query = "select email from usuario where email = '$email' and senha = md5 ('$senha')";
$result = mysqli_query ($conexao, $query);
$row = mysqli_num_rows ($result);

if ($row ==1){
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    header ('Location: menu.php');
    exit ();
}
else {  
    header ('Location: index.php');
    exit ();
}
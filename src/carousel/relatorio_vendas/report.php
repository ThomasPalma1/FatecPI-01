<?php

    include("conexao.php");
    session_start();

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Relatório de vendas</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<html>
    <head>
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <sidebar></sidebar>
        <main>
            <h1>Relatório de vendas</h1>
            
            <div class='content'>
                <h3>Dados do relatório</h3>
                
                <ul>
                    <li><strong>Total de vendas</strong><span>$1,032</span></li>
                    <li><strong>Dinheiro arrecadado com vendas</strong><span>$149</span></li>
                    <li><strong>Mais bem avaliado</strong><span>$40</span></li>
                    <li><strong>Menos avaliado</strong><span>$892</span></li>
                </ul>
            </div>
            <br>
            <br>
            <?php

                $query = "SELECT * FROM pedidos;";
                $result = mysqli_query($conexao, $query);

                while($pedidos = mysqli_fetch_assoc($result)){
                    echo("
                    <div class='content'>
                        <h3>Dados da venda</h3>
                        
                        <ul>
                            <li><strong>Id: </strong><span>".$pedidos['id_pedido']."</span></li>
                            <li><strong>Total da venda: </strong><span>".$pedidos['preco']."</span></li>
                            <li><strong>Produtos: </strong><span>".$pedidos['id_produto']."</span></li>
                            <li><strong>Parcelas: </strong><span>".$pedidos['parcelas']."</span></li>
                            <li><strong>Método de pagamento: </strong><span>".$pedidos['metodopag']."</span></li>
                            <li><strong>E-mail do comprador: </strong><span>".$pedidos['email_usuario']."</span></li>
                        </ul>
                    </div>
                    <br>
                    <br>");
                }
            ?>
        </main>
    </body>
</html>
<!-- partial -->
  
</body>
</html>

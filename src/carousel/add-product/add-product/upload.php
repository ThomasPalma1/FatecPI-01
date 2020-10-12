<?php
    session_start();
    include('conexao.php');
?>    
<?php
        if (isset($_POST['enviar'])):
            $formatosPermitidos = array ("pdf", "doc","docx");
            $quantidadeArquivos = count ($_FILES['file_cv']['name']);
            $contador = 0;

            while ($contador < $quantidadeArquivos){
                $extensao = pathinfo($_FILES['file_cv']['name'][$contador], PATHINFO_EXTENSION);
                if (in_array($extensao, $formatosPermitidos)):
                    $pasta = "arquivos/";
                    $temporario = $_FILES ['file_cv']["tmp_name"][$contador];
                    $nome = $_FILES['file_cv']['name'][$contador];

                    if (move_uploaded_file($temporario, $pasta.$nome)):
                        echo "Upload feito com sucesso para $pasta<br>";

                        $sql = "insert into arquivos (nome_arquivo, disciplina, descricao, extensao_arquivo) values ('$nome', 'teste', 'teste', '$extensao')";
                        mysqli_query($conexao, $sql);

                    else:
                        echo "Erro ao enviar o arquivo $temporario";
                    endif;
                else:
                    echo "$extensao não é permitido(a)! <br>";
                endif;
                $contador++;
            }
        endif;

    ?>
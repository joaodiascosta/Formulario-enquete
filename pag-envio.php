<?php
    include_once('config.php');

    if(isset($_POST['submit'])) {
        $resposta_1 = $_POST['pergunta1'];
        $resposta_2 = $_POST['pergunta2'];
        $resposta_3 = $_POST['pergunta3'];
        $resposta_4 = $_POST['pergunta4'];
        $resposta_5 = $_POST['pergunta5'];
        $resposta_6 = $_POST['pergunta6'];
        $resposta_7 = $_POST['pergunta7'];
        $resposta_8 = $_POST['pergunta8'];
        $resposta_9 = $_POST['pergunta9'];
        $resposta_10 = $_POST['pergunta10'];
        $participante_nome = $_POST['nome'];
        $participante_email = $_POST['email'];
        $participante_distrito = $_POST['distrito'];

        $result =  mysqli_query($conexao, "INSERT INTO respostas_participante(resposta_1, resposta_2, resposta_3, resposta_4, resposta_5, resposta_6, resposta_7, resposta_8, resposta_9, resposta_10, participante_nome, participante_email, participante_distrito) 
        VALUES ('$resposta_1', '$resposta_2', '$resposta_3', '$resposta_4', '$resposta_5', '$resposta_6', '$resposta_7', '$resposta_8', '$resposta_9', '$resposta_10', '$participante_nome', '$participante_email', '$participante_distrito')");
    }

    // print_r($_POST);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/style/style.css">
</head>
<body>
    <div class="container-envio">
        <h1 class="envio-title">Questionário enviado com sucesso!</h1>
    </div>
    <script src="./assets/js/script.js"></script>
</body>
</html>
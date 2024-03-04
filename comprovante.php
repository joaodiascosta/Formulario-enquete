<?php
    include_once('config.php');

    $respostaDistrito = $_POST['distrito'];
    $respostaBairro = $_POST['bairro'];
    
    if(isset($_POST['submit'])) {
        $resposta_1 = $_POST['pergunta1'];
        $resposta_2 = $_POST['pergunta2'];
        $resposta_3 = $_POST['pergunta3'];
        $resposta_4 = implode(', ', $_POST['pergunta4']);
        $resposta_5 = $_POST['pergunta5'];
        $resposta_6 = $_POST['pergunta6'];
        $resposta_7 = $_POST['pergunta7'];
        $resposta_8 = $_POST['pergunta8'];
        $resposta_9 = $_POST['pergunta9'];
        $resposta_10 = $_POST['pergunta10'];
        $participante_nome = $_POST['nome'];
        $participante_email = $_POST['email'];

        $result =  mysqli_query($conexao, "INSERT INTO respostas_participante(resposta_1, resposta_2, resposta_3, resposta_4, resposta_5, resposta_6, resposta_7, resposta_8, resposta_9, resposta_10, participante_nome, participante_email, participante_distrito) 
        VALUES ('$resposta_1', '$resposta_2', '$resposta_3', '$resposta_4', '$resposta_5', '$resposta_6', '$resposta_7', '$resposta_8', '$resposta_9', '$resposta_10', '$participante_nome', '$participante_email', '$respostaDistrito, $respostaBairro')");

        header('Location: http://localhost/pagesucesso.php');

}

?>

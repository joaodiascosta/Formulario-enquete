<?php
    include_once('config.php');

    $sql = "SELECT * FROM respostas_participante ORDER BY id_resposta DESC";

    $result = $conexao->query($sql);
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
    <div class="container-painel">
        <div class="painel-box-title">
            <h1 class="painel-title">Resultados da Enquete PDE</h1>
        </div>
        <div class="painel-box-button">
            <button class="painel-button">BAIXAR PLANILHA</button>
        </div>
       
        <div class="table-wrapper">
            <table class="painel-corpo">
                <thead>
                        <tr>
                            <th>ID</th>
                            <th>Resposta 1</th>
                            <th>Resposta 2</th>
                            <th>Resposta 3</th>
                            <th>Resposta <br>4</th>
                            <th>Resposta <br>5</th>
                            <th>Resposta <br>6</th>
                            <th>Resposta <br>7</th>
                            <th>Resposta 8</th>
                            <th>Resposta 9</th>
                            <th>Resposta <br>10</th>
                            <th>Nome do Participante</th>
                            <th>Email do Participante</th>
                            <th>Região e distrito do Participante</th>
                            <th>Data do Recebimento</th>
                        </tr>
                </thead>
                <tbody>
                    <?php
                        while($user_data = mysqli_fetch_assoc($result))
                        {
                            echo "<tr>";
                            echo "<td>".$user_data['id_resposta']."</td>";
                            echo "<td>".$user_data['resposta_1']."</td>";
                            echo "<td>".$user_data['resposta_2']."</td>";
                            echo "<td>".$user_data['resposta_3']."</td>";
                            echo "<td>".$user_data['resposta_4']."</td>";
                            echo "<td>".$user_data['resposta_5']."</td>";
                            echo "<td>".$user_data['resposta_6']."</td>";
                            echo "<td>".$user_data['resposta_7']."</td>";
                            echo "<td>".$user_data['resposta_8']."</td>";
                            echo "<td>".$user_data['resposta_9']."</td>";
                            echo "<td>".$user_data['resposta_10']."</td>";
                            echo "<td>".$user_data['participante_nome']."</td>";
                            echo "<td>".$user_data['participante_email']."</td>";
                            echo "<td>".$user_data['participante_distrito']."</td>";
                            echo "<td>".$user_data['created_at']."</td>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
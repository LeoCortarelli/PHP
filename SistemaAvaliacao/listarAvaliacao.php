<?php include_once('conexao.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/lista.css">
    <title>Listando comentario</title>
</head>
<body>
    <a href="index.php">Avaliar</a><br><br>
    <a href="listarAvaliacao.php">Lista</a><br><br>

    <!-- PRINTANDO A MEDIA -->
    <p>Media: <?php echo include('calcularMedia.php'); ?></p>

    <h2>Comentarios</h2>

    <?php
        $sql  = "SELECT nota, comentario, data_comentario FROM avaliacoes ORDER BY id DESC";
        $result = mysqli_query($conn, $sql);

        // Percorrer a lista de registros do banco de dados
        while($row = mysqli_fetch_array($result)){ ?>
            <div class="comment-container">
                <p class="comment-heading">Nota: <?php echo $row['nota']; ?></p>
                <p class="comment-heading">Comentario:</p>
                <p class="comment-text"><?php echo $row['comentario']; ?></p>
            </div>
        <?php } ?>
</body>
</html>
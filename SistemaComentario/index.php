<?php
    include('conexao.php');

    if(isset($_POST['btn'])){
        $comentario = $_POST['comentario'];
        $sql = "INSERT INTO comentarios(comentario) VALUE('$comentario')";
        $result = mysqli_query($conn, $sql);

        if(!$result){
            die('Erro ao inserir comentario: '. mysqli_error($conn));
        }

        header("Location: ".$_SERVER['PHP_SELF']);
        exit();
    }
    $sql2 = "SELECT * FROM comentarios ORDER BY datahora DESC";
    $result2 = mysqli_query($conn, $sql2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sistema Comentario</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="comentario" placeholder="Comentario">
        <button type="submit" name="btn">Publicar</button>
    </form>

    <?php while($linha = mysqli_fetch_array($result2, MYSQLI_ASSOC)){ ?>
        <p><?php echo $linha['comentario']; ?></p>        
    <?php } ?>   
</body>
</html>
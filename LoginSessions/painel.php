<?php include('protect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Principal</title>
</head>
<body>
    Ben vindo ao painel principal !! <?php echo $_SESSION['nome']; ?>
    <p><a href="sair.php">Sair</a></p>
</body>
</html>
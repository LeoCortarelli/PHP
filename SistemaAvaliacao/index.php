<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação com estrela</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

    <a href="index.php">Avaliar</a><br>
    <a href="listarAvaliacao.php">Lista</a>
        

    <h1>Avaliação</h1>

    <?php 
    // Imprimir a mensagem de erro com sucesso
        if(isset($_SESSION['msg'])){ // (isset)se existir a variavel
            echo $_SESSION['msg'];
            unset($_SESSION['msg']); // destruindo a msg
        }
    ?>

    <form action="processo.php" method="post">
        <div class="estrela">
            <input type="radio" name="estrela" id="vazio" value="" checked>

            <label for="estrela1"><i class="opcao fa"></i></label>
            <input type="radio" name="estrela" id="estrela1" id="vazio" value="1">

            <label for="estrela2"><i class="opcao fa"></i></label>
            <input type="radio" name="estrela" id="estrela2" id="vazio" value="2">

            <label for="estrela3"><i class="opcao fa"></i></label>
            <input type="radio" name="estrela" id="estrela3" id="vazio" value="3">

            <label for="estrela4"><i class="opcao fa"></i></label>
            <input type="radio" name="estrela" id="estrela4" id="vazio" value="4">

            <label for="estrela5"><i class="opcao fa"></i></label>
            <input type="radio" name="estrela" id="estrela5" id="vazio" value="5">

            <label for="estrela6"><i class="opcao fa"></i></label>
            <input type="radio" name="estrela" id="estrela6" id="vazio" value="6">

            <label for="estrela7"><i class="opcao fa"></i></label>
            <input type="radio" name="estrela" id="estrela7" id="vazio" value="7">

            <label for="estrela8"><i class="opcao fa"></i></label>
            <input type="radio" name="estrela" id="estrela8" id="vazio" value="8">

            <label for="estrela9"><i class="opcao fa"></i></label>
            <input type="radio" name="estrela" id="estrela9" id="vazio" value="9">

            <label for="estrela10"><i class="opcao fa"></i></label>
            <input type="radio" name="estrela" id="estrela10" id="vazio" value="10">
            <br>    
            <br>

            <!-- CAMPO ENVIAR COMENTARIO -->
            <textarea name="comentario"rows="3" cols="30" placeholder="Digite seu Comentario"></textarea>
            <br>
            <br>
            <button type="submit">Avaliar</button>
        </div>
    </form>
</body>
</html>
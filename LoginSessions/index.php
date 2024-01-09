<?php
    include('conexao.php');

    if(isset($_POST['email']) || isset($_POST['senha'])){ // Verificando se existe essa variavel

        if(strlen($_POST['email']) == 0){ // Verificando se o campo está em branco
            echo "Preencha seu email";
        }else if(strlen($_POST['senha']) == 0){
            echo "Preencha sua senha";
        }else{
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $sqlcode = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
            $sql_query = mysqli_query($conn, $sqlcode) or die("Falha na execução do codigo sql:" . $mysqli->error);

            $quantidade = $sql_query->num_rows; // Retorna a quantidade de linhasque a consulta retornou

            if($quantidade == 1){
                $usuario = $sql_query->fetch_assoc();

                if(!isset($_SESSION)){
                    session_start();
                }

                $_SESSION['id'] = $usuario['id'];
                $_SESSION['nome'] = $usuario['nome'];

                header('Location: painel.php');

            }else{
                echo "Falha ao logar email ou senha incorretos";
            }

        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula Sessions</title>
</head>
<body>
    <h1>Login Entre Sessions</h1>
    <form action="" method="post">
        
        <label>Email</label><br>
        <input type="text" name="email">

        <br>
        <br>

        <label>Senha</label><br>
        <input type="text" name="senha">

        <br>
        <br>

        <button type="submit">Entrar</button>
    </form>
</body>
</html>
<?php
    include 'conexao.php';

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $senhaEncript = MD5($senha); // SENHA ENCRIPTADA

    $sql = "INSERT INTO usuario(nome,email,senha,cpf,status) VALUES('$nome','$email','$senhaEncript','$cpf','Bloqueado')";
    $inserir = mysqli_query($conn, $sql);


    $sql2 = "SELECT max(id_usuario) as id_usuario FROM usuario";
    $busca = mysqli_query($conn, $sql2);
    $dados = mysqli_fetch_array($busca);

    $id = $dados['id_usuario'];
    
    header('Location: enviarBoleto.php?id='.$id);

?>
<?php
    // RETORNA AS INFORMAÇÕES DA SESSION DO USUARIO
    $info = \App\Session\User::getInfo(); // CHAMA O METODO getInfo no user.php na linha 53

?>

<h1>Admin - Aula</h1>
<p>Olá, <b><?=$info['name'] ?></b>. Seja muito bem vindo</p>

<a href="logout.php">
    <button class="btn btn-danger">Sair</button>
</a>
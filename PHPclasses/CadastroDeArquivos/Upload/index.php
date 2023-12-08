<?php

    include('conexao.php');


    function enviarArquivo($error, $size, $name, $tmp_name){ // colocando em uma funcao

        include('conexao.php'); // AS FUNCOES PRECISAO CHAMAR O BANCO E OUTROS ARQUIVOS DE NOVO.

        if($error){
            die('Falha ao enviar arquivo');
        }

        if($size > 2097152){
            die("ARQUIVO MX DE 2MB");
        }

        $pasta = "Arquivo/";
        $nomeDoArquivo = $name;
        $novoNomeDoArquivo = uniqid(); // O uniqid() cria um id automatico para o arquivo ex: 345ihjhv66254.png

        $extencaoDoArquivo = strtolower(pathinfo($nomeDoArquivo,PATHINFO_EXTENSION)); //ELA PEGA SO A ESTENCAO DO ARQUIVO COM .jpg ou .png etc...
                            // O strtolower = transforma tudo para minusculo 

        if($extencaoDoArquivo != 'jpg' && $extencaoDoArquivo != 'png'){
            die("SOMENTE ARQUIVOS .JPG OU .PNG");
        }

        $path = $pasta . $novoNomeDoArquivo . "." . $extencaoDoArquivo;
        $deuCerto = move_uploaded_file($tmp_name, $path);
                    // move_uploaded_file = RETORNA TRUE SE DEU CERTO OU FALSE SE DEU ERRADO

        if($deuCerto){
            $mysqli->query("INSERT INTO arquivos(nome,path) value('$nomeDoArquivo','$path')") or die($mysqli->error);
            return true;
            //echo "<p>Arquivo enviado com sucesso, <br> clique aqui:<a href=\"arquivo/$novoNomeDoArquivo/$extencaoDoArquivo\">Clique aqui</a></p>";
                                                                // Barra invertida permite vc colocar aspas dublas dentro de outra aspas duplas
        }else{
            return false;
        }
    }

    if(isset($_FILES['file'])) {
        $arquivo = $_FILES['file'];

        $tudo_certo = true;

        foreach($arquivo['name'] as $index => $arq){ // FOR para salvar os arquivos , ele salva i indice 
                                            //ex:0,1,2,3 do array no $index e o conteudo no $arq
            enviarArquivo($arquivo['error'][$index], $arquivo['size'][$index], $arquivo['name'][$index], $arquivo['tmp_name'][$index]);
                            // FAZENDO UM FOR E PASSANDO POR TODOS OS INDICES = $index , o $arq sao os arquivos completos
            if($deuCerto){
                $tudo_certo = false;
            }
        }

        if($tudo_certo){
            echo "<p>Todos os arquivos foram enviados com sucesso</p>";
        }else{
            echo "<p>Falha ao enviar um ou mais arquivos</p>";
        }
        

    }

    $sql_query = $mysqli->query("SELECT * FROM arquivos") or die($mysqli->error);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload de arquivo</title>
</head>
<body>
    <form enctype="multipart/form-data" action="" method="POST">

        <p><label>Selecione o arquivo</label>
        <input multiple name="file[]" type="file"></p>  <!-- file[] CRIA UM ARRAY PARA VARIOS ARQUIVOS ?> -->

        <button name="upload" type="submit">Enviar</button>
    </form><br>

    <h2>Lista de arquivos</h2>
    <table border="1" cellpadding="10">
        <thead>
            <th>Preview</th>
            <th>Arquivo</th>
            <th>Data de Envio</th>
        </thead>
        <tbody>
            <tr>
                
        <?php
            while($arquivo = $sql_query->fetch_assoc()){  //while para criar varias colunas 
        ?>
                <td><img height="60" src="<?php echo $arquivo['path']; ?>" alt=""></td> 
                <td><a href="<?php echo $arquivo['path']; ?>"></a><?php echo $arquivo['nome']; ?></td>
                <td><?php echo date("d/m/Y H:i", strtotime($arquivo['data_upload'])); ?></td>    
            </tr>
        </tbody>


            <?php
                }  // FECHA O WHILE 
            ?>
    </table>
</body>
</html>
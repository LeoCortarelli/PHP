<?php

    class Newsletter {

        public function cadastrarEmail($email){

            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){  // filter_var PEGA A VARIAVEL PARA SER VALIDADE e O FILTER_VALIDATE_EMAIL VERIFICA SE E EMAIL
                throw new Exception("Este email e invalido", 1);
            }else{
                echo "Email cadastrado com SUCESSO";
            }

        }

    }


    $newsletter = new Newsletter();
    //$newsletter->cadastrarEmail("contato@"); // SE FOR ASSIM VC AINDA TEM QUE TRATAR ESSA ECESSAO 


    /* Temos 3 tipos Exception que podemos exibir code(mostra o codigo),file(mostra arquivo),line(linha) */ 

    try { // PARA TRATAR A ECESSAO DO ERRO
        $newsletter->cadastrarEmail("contato@");
    } catch (Exception $e) {
        echo "Mensagem: ". $e->getMessage();  // Message(Mostra a mensagem no (if))            
        echo "<br>";
        echo "Codigo: ". $e->getCode();     // Code(mostra o codigo)
        echo "<br>";
        echo "Linha: ". $e->getLine();      // Line(linha)
        echo "<br>";
        echo "Arquivo: ". $e->getFile();    // File(mostra o arquivo) 
    }                                       
   

?>
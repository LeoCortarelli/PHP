<?php

    class Login {
        private $email;
        private $senha;
        private $nome;

        public function __construct($email, $senha, $nome){  // CONSTRUTOR EM PHP
            $this->nome = $nome;
            $this->setEmail($email);
            $this->setSenha($senha);
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getEmail(){ // GET PARA EMAIL
            return $this->email;
        }

        public function setEmail($e){ // SET PARA EMAIL
            $email = filter_var($e, FILTER_SANITIZE_EMAIL); // FILTRANDO EMAIL OU LIMPANDO EMAIL ERRADOS COMO EX: teste*&¨%@gmail.com
            $this->email = $email;
        }

        public function getSenha(){ // GET PARA SENHA
            return $this->senha;
        }

        public function setSenha($s){ // SET PARA SENHA
            $this->senha = $s;
        }

        public function Logar(){
            if($this->email == "teste@gmail.com" and $this->senha == "123"){ // TRATAMENTO DE ERRO
                echo "Logado com sucesso !!";
            }else{
                echo "Dados invalidos";
            }
        }
    }

    /*  INSTANCIANDO UMA CLASSE  */
 
    //echo "<h4>INSTANCIANDO UMA CLASSE</h4>";
    //echo "<br>"; // QUEBRANDO UMA LINHA
    //$logar = new Login();
    //$logar->setEmail("teste@gmail.com"); // SETANDO O EMAIL NA CLASSE VIA SET
    //$logar->setSenha("123"); // SETANDO A SENHA NA CLASSE VIA SET
    //$logar->Logar();

    //echo "<br>";

    //echo "email: ". $logar->getEmail();  // Printando o EMAIL NA TELA
    //echo "<br>";
    //echo "Senha: ". $logar->getSenha();  //Printando a SENHA NA TELA


    //echo "<br>";
    //echo "<br>";


    /*  INSTANCIANDO UMA CLASSE COM O CONSTRUTOR  */

    echo "<h4>INSTANCIANDO UMA CLASSE COM O CONSTRUTOR</h4>";
    echo "<br>";

    $logar2 = new Login("teste@gmail.com","123","Teste");
    $logar2->Logar();
    echo "<br>";

    echo "email: ". $logar2->getEmail();  // Printando o EMAIL NA TELA
    echo "<br>";
    echo "Senha: ". $logar2->getSenha();  //Printando a SENHA NA TELA
    echo "<br>";
    echo "Nome: ". $logar2->getNome();  //Printando o  NOME NA TELA
?>
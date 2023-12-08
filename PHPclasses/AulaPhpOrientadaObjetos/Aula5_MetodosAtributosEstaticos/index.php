<?php
    class Login{
        public static $user; //Criando um ATRIBUTO ESTATICO

        public static function verificaLogin(){ // Criando um METODO ESTATICO
            echo "O usuario: ". self::$user ." está logado";
                        /* O METODO $this->user Nao pode ser USADO EM um metodo estatico EM VEZ DISSO USAMOS
                        O COMANDO self::$user PARA USAR DENTRO DO METODO STATICO */
        }

        public function sairSistema(){ // VC PODE ULTILIZAR METODOS COMUNS TAMBEM NORMAL
            echo "O usuario: ". $this->user ."deslogou"; // AQUI VC PODE ULTILIZAR O $this->user
        }

    }

$login = new Login(); /* COM OS METODOS ESTATICOS NÃO PRECISAMOS MAIS INSTANCIAR UM OBJETO DESSA FORMA */

Login::$user = "admin"; // INSTANCIANDO UM ATRIBUTO ESTATICO
Login::verificaLogin(); // INSTANCIANDO UM METODO ESTATICO 

//Login::sairSistema(); // vc não consegue ultilizar esse metodo assim !!!

?>
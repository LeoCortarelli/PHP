<?php
    class Animal{

        public function andar(){
            echo "O ANIMAL ANDOU";
        }

        public function correr(){
            echo "O ANIMAL CORREU";
        }
    }

    class Cavalo extends Animal{

        public function andar(){   // O POLIMORFISMO E SIMPLESMENTE SUBISTITUIR OU REESCREVER UM METODO HERDADO
            echo "O CAVALO ANDOU";

            echo "<br>";    

            $this->correr(); // VC PODE CHAMAR ESSE METODO DA CLASSE PRINCIPAL NAS CLASSES FILHAS
        }
        
    }

    $animal = new Animal();
    $animal->andar();

    echo "<br>";
    echo "<br>";

    $cavalo = new Cavalo();
    $cavalo->andar();
?>
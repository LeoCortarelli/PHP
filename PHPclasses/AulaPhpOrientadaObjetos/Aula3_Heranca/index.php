<?php

    class Veiculo{      // INSTANCIANDO A CLASSE PRINCIPAL
        private $modelo;
        private $cor;
        private $ano;

        public function Andar(){
            echo "Andou";
        }

        public function Parar(){
            echo "Parou";
        }

        /*  GET E SET  */

        public function getModelo(){
            return $this->Modelo;
        }

        public function setModelo($modelo){
            $this->modelo = $modelo;
        }

        public function getCor(){
            return $this->cor;
        }

        public function setCor($cor){
            $this->cor = $cor;
        }

        public function getAno(){
            return $this->ano;
        }

        public function setAno($ano){
            $this->ano = $ano;
        }
    }



    /*  CLASSES EXTENDS DE VEICULO  */

    class Carro extends Veiculo{  // A CLASSE E FILHA DA CLASSE VEICULO

        public function ligarLimpador(){ // Funcao para ligar limpador de parabriza do carro
            echo "Limpando";
        }

    }

    class Moto extends Veiculo{ // A CLASSE E FILHA DA CLASSE VEICULO

        public function darGrau(){
            echo "Subindo !!!";
        }

    }


    $carro = new Carro();
    $carro->setModelo("Ferrari");
    $carro->setCor("Red");
    $carro->setAno(2023);
    $carro->Andar();
    echo "<br>";
    $carro->ligarLimpador();
    echo "<br>";
    var_dump($carro);

    echo "<br>";
    echo "<br>";

    $moto = new Moto();
    $moto->setModelo("BMW");
    $moto->setCor("White");
    $moto->setAno(2023);
    $moto->Parar();
    echo "<br>";
    $moto->darGrau();
    echo "<br>";
    var_dump($moto);

?>
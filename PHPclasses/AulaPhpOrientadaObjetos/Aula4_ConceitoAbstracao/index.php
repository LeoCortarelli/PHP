<?php

    /* CRIANDO CLASSE ABSTRATA */

    abstract class Banco{  
        protected $saldo;
        protected $limiteDeSaque;
        protected $juros;

        abstract protected function Sacar($s); // E OBRIGATORIO DECLARAR ESSE METODO NAS CLASSES FILHAS 
        abstract protected function Depositar($d); // E OBRIGATORIO DECLARAR ESSE METODO NAS CLASSES FILHAS 
                                        # ! NAO ESQUECER DE COLOCAR O PARAMETRO SE PRECISAR 

        public function getSaldo(){
            return $this->saldo;
        }

        public function setSaldo($s){
            $this->saldo = $s;
        }
    }


    class Itau extends Banco{

        public function Sacar($s){        // AS CLASSES PRECISAM DESSE METODO PORQUE SAO EXTENDS DE UMA CLSSE ABSTRACT
            $this->saldo = $this->saldo - $s;
            echo "<hr> Sacou: ". $s;
        }

        public function Depositar($d){
            $this->saldo = $this->saldo + $d;
            echo "<hr> Depositou: ". $d;
        }

    }


    /* CRIANDO OBJETOS */
    
    $itau = new Itau();
    $itau->setSaldo(1000);
    echo "<hr> Saldo: ". $itau->getSaldo();
    $itau->Sacar(250);
    echo "<hr> Saldo: ". $itau->getSaldo();
    $itau->Depositar(900);
    echo "<hr> Saldo: ". $itau->getSaldo();
?>
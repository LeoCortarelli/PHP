<?php
    interface Crud {
        public function create();
        public function read();
        public function update();
        public function delete();
    }


/* Em vez de colocar EXTENDS(para clsses ABSTRATA) nos 
    colocamos IMPLEMENTES para as INTERFACES*/
    class Noticias implements Crud { 

        /* INTERFACES E OBRIGATORIO VC CRIAR OS METODOS DA CLASSE PRINCIPAL */

        public function create(){    // OBRIGATORIO POR CONTA DA CLASSE CRUD
            // logica para o metodo criar uma NOTICIA
        }

        public function read(){     // OBRIGATORIO POR CONTA DA CLASSE CRUD
            // logica para o metodo LER uma Noticia
        }

        public function update(){   // OBRIGATORIO POR CONTA DA CLASSE CRUD
            // logica para o metodo ATUALIZAR UMA NOTICIA
        }

        public function delete(){   // OBRIGATORIO POR CONTA DA CLASSE CRUD
            // logica para o metodo DELETAR UMA NOTICIA 
        }

    }








?>
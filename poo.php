<?php
 // se inicializa la clase
    class Saiyajin{


       /*
        //constructor
        public function __construct($nombre, $nivel_pelea){
            $this->nombre = $nombre;
            $this->nivel_pelea = $nivel_pelea;
        }

        //atributos de la clase
        public string $nombre;
        public int $nivel_pelea;*/

        public function __construct(public string $nombre, public int $nivel_pelea){
        }

        
        //metodo
        public function Saludar(){
            //El this hace referencia a algo que esta dentro de la clase
            return "Hla soy ".$this-> nombre ." ". $this->NivelDePelea();
        }

        public function NivelDePelea($text="jajajjajjj") {
            return $this->nombre." tiene un poder de pelea de ". $this ->nivel_pelea. $text;
        }

    }


?>
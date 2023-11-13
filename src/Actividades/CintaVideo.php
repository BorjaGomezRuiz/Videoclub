<?php
    include_once "Soporte.php";
    class CintaVideo extends Soporte{

        private float $duracion;

        public function __construct(string $titulo, int $numero, float $precio, float $duracion){
            parent::__construct($titulo, $numero, $precio);
            $this->duracion = $duracion;
        }

        public function muestraResumen(){
            echo"<br>Pelicula en VHS:";
            Soporte::muestraResumen();
            echo "<br>Duracion: " . $this->duracion . "<br><br>";
        }
    }

?>
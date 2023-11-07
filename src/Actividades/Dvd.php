<?php
    class Dvd extends Soporte{
        public string $idiomas;
        private string $formatoPantalla;

        public function __construct(string $titulo, int $numero, float $precio,string $idiomas,string $formatoPantalla){
        parent::__construct($titulo, $numero, $precio);
        $this->idiomas = $idiomas;
        $this->formatoPantalla = $formatoPantalla;
        }

        public function muestraResumen(){
            echo "<br>Película en DVD:";
            Soporte::muestraResumen();
            echo "<br>Idiomas:".$this->idiomas."<br>Formato Pantalla:".$this->formatoPantalla;
        }
    }
?>
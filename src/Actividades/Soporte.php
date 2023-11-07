<?php
class Soporte{
        public string $titulo;
        protected int $numero;
        private float $precio;

        private static $IVA = 0.21;

        public function __construct(string $titulo, int $numero, float $precio){
            $this->titulo = $titulo;
            $this->numero = $numero;
            $this->precio = $precio;
        }

        public function getNumero():int{
            return $this->precio;
        }
        public function getPrecio(): string{
            return $this->precio;
        }

        public function getPrecioConIva():float{
            return $this->precio + $this->precio * Soporte::$IVA;
        }

        public function muestraResumen(){
            echo "<br><br>".$this->titulo."<br>".$this->precio." € (IVA no incluido)";
        }


    }

?>
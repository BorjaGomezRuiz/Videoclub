<?php
    interface Resumible {
        public function muestraResumen();
    }

    abstract class Soporte implements Resumible {

/*Al crear la clase abstracta permite definir una estructura común y un conjunto de reglas para clases derivadas, 
promoviendo la reutilización de código y garantizando la implementación de comportamientos esenciales en las clases hijas. 
Además, facilita el polimorfismo y establece un contrato implícito entre la clase base y las clases derivadas.*/

/*El error que se procuce al cambiar la clase abstarcta es que no se puede crear ningun objeto el cual sea directamente de la clase
por ejemplo en la clase Inicio.php realizabamos un $soporte = new Soporte(...); y esto al cambiar la clase a abstracta no se puede realizar*/

/* implements Resumible: No hace falta que lo implementen las clases hijas */
        public string $titulo;
        protected int $numero;
        private float $precio;

        private static $IVA = 0.21;

        public function __construct(string $titulo, int $numero, float $precio) {
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
            echo "<hr><em>".$this->titulo."</em><br>".$this->precio." € (IVA no incluido)";
        }

    }

?>
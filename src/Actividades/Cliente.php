<?php
    class Cliente{

        private array $soportesAlquilados;
        private int $numSoportesAlquilados;
        public function __construct(public string $nombre,private int $numero,private int $maxAlquilerConcurrente = 3){

        }

        public function getNumero(): int{
            return $this->numero;
        }

        public function setNumero(int $numero){
            $this->numero = $numero;
        }

        public function getNumSoportesAlquilados(): int{
            return $this->numSoportesAlquilados;
        }

        public function muestraResumen(){
            echo "<br>Nombre: ".$this->nombre."<br>Cantidad de alquileres: ".count($this->soportesAlquilados);
        }

        public function tieneAlquilado(Soporte $s):bool{
            foreach ($this->soportesAlquilados as $soporteInsertado) {
               if ($soporteInsertado instanceof $s) {
                return true;
               }
            }
            return false;
        }
    }
?>
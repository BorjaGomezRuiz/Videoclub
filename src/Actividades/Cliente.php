<?php
    class Cliente{

        private array $soportesAlquilados;
        private int $numSoportesAlquilados;

        public function __construct(public string $nombre, private int $numero, private int $maxAlquilerConcurrente = 3){
            $this->soportesAlquilados = [];
            $this->numSoportesAlquilados = 0;
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

        public function alquilar(Soporte $s): bool {
            if ($this->tieneAlquilado($s)) {
                echo "El soporte ya está alquilado por este cliente: ". $this->nombre. "<br>";
                return false;
            }

            if ($this->numSoportesAlquilados >= $this->maxAlquilerConcurrente) {
                echo "Ha alcanzado el límite de alquileres concurrentes. <br>";
                return false;
            }

            $this->soportesAlquilados[] = $s;
            $this->numSoportesAlquilados++;
            echo "<br>Soporte alquilado con éxito a: " .$this->nombre;
            echo $s->muestraResumen() ; 
            return true;
        }

        public function devolver(int $numSoporte): bool {
            foreach ($this->soportesAlquilados as $key => $soporte) {
                if ($soporte->getNumero() === $numSoporte) {
                    unset($this->soportesAlquilados[$key]);
                    $this->numSoportesAlquilados--;
                    echo "Soporte devuelto con éxito. <br>";
                    return true;
                }
            }
    
            echo "No se ha podido encontrar el soporte en los alquileres de este cliente. <br>";
            return false;
        }
    
        public function listaAlquileres(): void {
            echo "Este cliente tiene {$this->numSoportesAlquilados} elementos alquilados. No puede alquilar más en este videoclub hasta que no devuelva algo";
    
            foreach ($this->soportesAlquilados as $soporte) {
                echo "<br>";
                $soporte->muestraResumen();
            }
    
            if ($this->numSoportesAlquilados === 0) {
                echo "<br>Este cliente no tiene alquilado ningún elemento.";
            }
        }


    }
?>
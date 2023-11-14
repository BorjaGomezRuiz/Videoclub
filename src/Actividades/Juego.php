<?php
    class Juego extends Soporte{

        public function __construct($titulo, $numero, $precio, public string $consola, public int $minNumJugadores, public int $maxNumJugadores) {
            parent::__construct($titulo, $numero, $precio);
        }
        
        public function muestraJugadoresPosibles():string{
            if ($this->minNumJugadores === 1 && $this->maxNumJugadores === 1) {
                return "Para un jugador";
            }else if($this->minNumJugadores > 1 && $this->minNumJugadores === $this->maxNumJugadores){
                return "Para ".$this->minNumJugadores." jugadores";
            }else{
                return "De ".$this->minNumJugadores." a ".$this->maxNumJugadores." jugadores";
            }
        }

        public function muestraResumen(): void {
            echo "<br>Juego para: ".$this->consola;
            Soporte::muestraResumen();
            echo "<br>".$this->muestraJugadoresPosibles();
        }
        
    }



?>


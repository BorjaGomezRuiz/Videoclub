<?php
include_once "Soporte.php";
include_once "Cliente.php";
include_once "Juego.php";
include_once "Dvd.php"; 
include_once "CintaVideo.php";
class Videoclub {
    private string $nombre;
    private array $productos;
    private array $socios;

    public function __construct(string $nombre) {
        $this->nombre = $nombre;
        $this->productos = [];
        $this->socios = [];
    }

    private function incluirProducto(Soporte $soporte) {
        $this->productos[] = $soporte;
        echo "Incluido soporte " . $soporte->getNumero() . "<br>";
    }

    public function incluirJuego(string $titulo, float $precio, string $plataforma, string $consola, int $maxNumJugadores, int $minNumJugadores) {
        $juego = new Juego($titulo, $precio, $plataforma, $consola, $minNumJugadores, $maxNumJugadores);
        $this->incluirProducto($juego);
    }

    public function incluirDvd(string $titulo, float $precio, string $idiomas, string $formatoPantalla) {
        $dvd = new Dvd($titulo, count($this->productos), $precio, $idiomas, $formatoPantalla);
        $this->incluirProducto($dvd);
    }

    public function incluirCintaVideo(string $titulo, float $precio, int $duracion) {
        $cintaVideo = new CintaVideo($titulo, count($this->productos), $precio, $duracion);
        $this->incluirProducto($cintaVideo);
    }

    public function incluirSocio(string $nombre, int $numero = 0) {
        $socio = new Cliente($nombre, $numero);
        $this->socios[] = $socio;
        echo "Incluido socio " . $socio->getNumero() . "<br>";
    }

    public function alquilaSocioProducto(int $numSocio, int $numSoporte) {
        $socio = $this->buscarSocioPorNumero($numSocio);
        $soporte = $this->buscarSoportePorNumero($numSoporte);

        if ($socio && $soporte) {
            $socio->alquilar($soporte);
        }
    }

    private function buscarSocioPorNumero(int $numero): ?Cliente {
        foreach ($this->socios as $socio) {
            if ($socio->getNumero() === $numero) {
                return $socio;
            }
        }
        return null;
    }

    private function buscarSoportePorNumero(int $numero): ?Soporte {
        foreach ($this->productos as $soporte) {
            if ($soporte->getNumero() === $numero) {
                return $soporte;
            }
        }
        return null;
    }

    public function listarProductos() {
        echo "Listado de los " . count($this->productos) . " productos disponibles:<br>";
        foreach ($this->productos as $producto) {
            echo $producto->muestraResumen() . "<br>";
        }
    }

    public function listarSocios() {
        echo "Listado de " . count($this->socios) . " socios del videoclub:<br>";
        foreach ($this->socios as $socio) {
            echo $socio->muestraResumen() . "<br>";
        }
    }
}
?>

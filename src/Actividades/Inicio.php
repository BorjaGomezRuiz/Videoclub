<?php
    include "Soporte.php";
    $soporte1 = new Soporte("Tenet", 22, 3);
    echo "<strong>" . $soporte1->titulo . "</strong>";
    echo "<br>Precio: " . $soporte1->getPrecio() . " euros";
    echo "<br>Precio IVA incluido: " . $soporte1->getPrecioConIVA() . " euros";
    $soporte1->muestraResumen();

    include "CintaVideo.php";
    $miCinta = new CintaVideo("Los cazafantasmas", 23, 3.5, 107);
    echo "<br><hr><strong>" . $miCinta->titulo . "</strong>";
    echo "<br>Precio: " . $miCinta->getPrecio() . " euros";
    echo "<br>Precio IVA incluido: " . $miCinta->getPrecioConIva() . " euros";
    $miCinta->muestraResumen();

    include "Dvd.php";
    $miDvd = new Dvd("Origen", 24, 15, "es,en,fr", "16:9");
    echo "<br><hr><strong>" . $miDvd->titulo . "</strong>";
    echo "<br>Precio: " . $miDvd->getPrecio() . " euros";
    echo "<br>Precio IVA incluido: " . $miDvd->getPrecioConIva() . " euros";
    $miDvd->muestraResumen();

?>
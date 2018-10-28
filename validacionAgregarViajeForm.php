<?php
/**
 * Created by PhpStorm.
 * User: rodro077
 * Date: 28-10-18
 * Time: 2:52
 */
// define variables and set to empty values
$regionOrigenErr = $comunaOrigenErr = $regionDestinoErr = $comunaDestinoErr
    = $fechaViajeErr = $espacioDisponibleErr = $kilosDisponiblesErr = $emailViajeroErr
    = $numeroCelularViajeroErr = "";
$regionOrigen = $comunaOrigen = $regionDestino = $comunaDestino
    = $fechaViaje = $espacioDisponible = $kilosDisponibles = $emailViajero
    = $numeroCelularViajero = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $comunaOrigen = test_input($_POST["comuna-origen"]);
    $regionDestino = test_input($_POST["region-destino"]);
    $comunaDestino = test_input($_POST["comuna-destino"]);
    $fechaViaje = test_input($_POST["fecha-viaje"]);
    $espacioDisponible = test_input($_POST["espacio-disponible"]);
    $kilosDisponibles = test_input($_POST["kilos-disponibles"]);
    $emailViajero = test_input($_POST["email"]);
    $numeroCelularViajero = test_input($_POST["celular"]);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!(strcmp($_POST["region-origen"],"sin-region"))) {
        $regionOrigenErr = "Region es requerida.";
    } else {
        $regionOrigen = test_input($_POST["region-origen"]);
    }
    if (!(strcmp($_POST["comuna-origen"],"sin-region"))) {
        $comunaOrigenErr = "Region es requerida.";
    } else if (!(strcmp($_POST["comuna-origen"],"sin-comuna"))) {
        $comunaOrigenErr = "Comuna es requerida.";
    } else {
        $comunaOrigen = test_input($_POST["comuna-origen"]);
    }
    if (!(strcmp($_POST["region-destino"],"sin-region"))) {
        $regionDestinoErr = "Region es requerida.";
    } else {
        $regionDestino = test_input($_POST["region-destino"]);
    }
    if (!(strcmp($_POST["comuna-destino"],"sin-region"))) {
        $comunaDestinoErr = "Region es requerida.";
    } else if (!(strcmp($_POST["comuna-destino"],"sin-comuna"))) {
        $comunaDestinoErr = "Comuna es requerida.";
    } else {
        $comunaDestino = test_input($_POST["comuna-destino"]);
    }
    if (empty($_POST["fecha-viaje"])) {
        $fechaViajeErr = "Fecha es requerida.";
    } else {
        $fechaViaje = test_input($_POST["fecha-viaje"]);
    }
    if (!(strcmp($_POST["espacio-disponible"],"--"))) {
        $espacioDisponibleErr = "Espacio es requerido.";
    } else {
        $espacioDisponible = test_input($_POST["espacio-disponible"]);
    }
    if (!(strcmp($_POST["kilos-disponibles"],"--"))) {
        $kilosDisponiblesErr = "Especificar kilos.";
    } else {
        $kilosDisponibles = test_input($_POST["kilos-disponibles"]);
    }
    if (empty($_POST["email"])) {
        $emailViajeroErr = "Email es requerido.";
    } else {
        $emailViajero = test_input($_POST["email"]);
    }
    if (empty($_POST["celular"])) {
        $numeroCelularViajeroErr = "Número celular es requerido.";
    } else {
        $numeroCelularViajero = test_input($_POST["celular"]);
    }
}

function test_input($data) {
    $data = trim($data); // elimina los caracteres innecesarios (espacio extra, tabulador, nueva línea)
    $data = stripslashes($data); // elimina las barras diagonales inversas
    $data = htmlspecialchars($data);
    return $data;
}

//echo "<h2>Your Input:</h2>";
//echo $espacioDisponible;
//echo "<br>";

?>
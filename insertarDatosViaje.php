<?php
/**
 * Created by PhpStorm.
 * User: rodro077
 * Date: 29-10-18
 * Time: 14:53
 */

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "tarea2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO viaje (fecha_ida, fecha_regreso, origen, destino, kilos_disponible,
  espacio_disponible, email_viajero, celular_viajero) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param( "sss",$fecha_ida, $fecha_regreso, $origen, $destino, $kilos_disponible,
    $espacio_disponible, $email_viajero, $celular_viajero);

// set parameters and execute
$fecha_ida = $_POST["fecha"];
$fecha_regreso = "";
$stmt->execute();


echo "New records created successfully";

$stmt->close();
$conn->close();
?>


<?php
/**
 * Created by PhpStorm.
 * User: rodro077
 * Date: 29-10-18
 * Time: 14:53
 */
$servername = "localhost";
$username = "rodro077";
$password = "GgNBIaOXJUnR8ZMg";
$dbname = "tarea2";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// set parameters and execute
$fecha_ida = '2018-11-04';
$fecha_regreso = '2018-11-10';
$origen = '50504';
$destino = '80401';
$kilos_disponible = '2';
$espacio_disponible = '1';
$email_viajero = 'a@a.cl';
$celular_viajero = $_POST["celular"];

$sql = "INSERT INTO `viaje` (fecha_ida, origen, destino, kilos_disponible,
  espacio_disponible, email_viajero, celular_viajero) VALUES ('$fecha_ida', '$origen', '$destino', '$kilos_disponible', '$espacio_disponible',
  '$email_viajero', '$celular_viajero')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;

}
$conn->close();


/*
$servername = "localhost";
$username = "rodro077";
$password = "GgNBIaOXJUnR8ZMg";
$dbname = "tarea2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO viaje (id, fecha_ida, fecha_regreso, origen, destino, kilos_disponible,
  espacio_disponible, email_viajero, celular_viajero) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param( "sss",$id,$fecha_ida, $fecha_regreso, $origen, $destino, $kilos_disponible,
    $espacio_disponible, $email_viajero, $celular_viajero);

// set parameters and execute
$id = "";
$fecha_ida = $_POST["fecha-viaje"];
$fecha_regreso = "";
$origen = $_POST["comuna-origen"];
$destino = $_POST["comuna-destino"];
$kilos_disponible = $_POST["kilos-disponibles"];
$espacio_disponible = $_POST["espacio-disponible"];
$email_viajero = $_POST["email"];
$celular_viajero = $_POST["celular"];
$stmt->execute();


echo "New records created successfully";

$stmt->close();
$conn->close();
*/
?>


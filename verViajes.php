<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ver Viajes</title>
    <link rel="stylesheet" type="text/css" href="css/boostrapV4w3cFix.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="js/regionesYcomunas.js"></script>
    <script src="js/validacionAgregarViajeForm.js"></script>
    <script src="js/clickableRow.js"></script>
    <script>
        $(function(){
            $("#nav-bar").load("barraNavegacion.html");
        });
    </script>
</head>
<body>
<!--barra de navegacion-->
<div id="nav-bar"></div>
<!--DATOS DE VIAJES-->
<div id="verViajes" class="container">
    <h2>Viajes Programados(click en viaje para más detalles)</h2>
    <?php
    include 'datosServidor.php';
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT c1.nombre, c2.nombre, v1.fecha_ida, e1.valor, k1.valor, 
    v1.email_viajero, v1.id  FROM `viaje` v1, `comuna` c1, `comuna` c2, `kilos_encargo` k1, `espacio_encargo` e1
    WHERE c1.id=origen AND c2.id=destino AND k1.id=kilos_disponible AND e1.id=espacio_disponible";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table class='table'>
<thead><tr>
    <th>Origen</th><th>Destino</th><th>Fecha Viaje</th><th>Espacio</th><th>Kilos</th><th>Email</th>
</tr></thead>";
        // output data of each row
        while($row = $result->fetch_row()) {
            echo "<tr class='clickable-row' data-href='http://localhost/Tarea2CC5002/detailViaje.php?id=" .$row[6]. "'><td>" . $row[0]. "</td><td>" . $row[1]. "</td>
<td>" . $row[2]. "</td><td>" . $row[3]. "</td><td>" . $row[4]. "</td><td>" . $row[5]. "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    $conn->close();
    ?>
</div>

</body>
</html>
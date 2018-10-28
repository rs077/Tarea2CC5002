<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ver Encargos</title>
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
<div id="nav-bar"></div>
<!--DATOS DE ENCARGOS-->
<div id="verEncargos" class="container">
    <h2>Encargos Programados(click en encargo para más detalles)</h2>
    <table class="table">
        <thead>
        <tr>
            <th>Origen</th>
            <th>Destino</th>
            <th>Foto</th>
            <th>Espacio</th>
            <th>Kilos</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        <tr class='clickable-row' data-href="fila1Encargos.html">
            <td>región Tarapacá, comuna Pica</td>
            <td>región Coquimbo, comuna Vicuña</td>
            <td><img src="images/imagen1" alt="Imagen Encargo" style="width:100%;max-width: 80px;max-height: 80px"></td>
            <td>20x20x20</td>
            <td>800gr</td>
            <td>john@example.com</td>
        </tr>
        <tr class='clickable-row' data-href="fila2Encargos.html">
            <td>región Araucanía, comuna Temuco</td>
            <td>región Atacama, comuna de Copiapó</td>
            <td><img src="images/imagen2" alt="Imagen Encargo" style="width:100%;max-width: 80px;max-height: 80px"></td>
            <td>30x30x30</td>
            <td>1.5kg</td>
            <td>ron@example.com</td>
        </tr>
        <tr class='clickable-row' data-href="fila3Encargos.html">
            <td>región Los Ríos, comuna Valdivia</td>
            <td>región Los Lagos, comuna Fresia</td>
            <td><img src="images/imagen3" alt="Imagen Encargo" style="width:100%;max-width: 80px;max-height: 80px"></td>
            <td>30x30x30</td>
            <td>800gr</td>
            <td>july@example.com</td>
        </tr>
        <tr class='clickable-row' data-href="fila4Encargos.html">
            <td>región del Biobío, comuna Penco</td>
            <td>región Coquimbo, comuna La Serena</td>
            <td><img src="images/imagen4" alt="Imagen Encargo" style="width:100%;max-width: 80px;max-height: 80px"></td>
            <td>10x10x10</td>
            <td>500gr</td>
            <td>clara@example.com</td>
        </tr>
        <tr class='clickable-row' data-href="fila5Encargos.html">
            <td>región Valparaíso, comuna Valparaíso</td>
            <td>región Tarapacá, comuna Huara</td>
            <td><img src="images/imagen5" alt="Imagen Encargo" style="width:100%;max-width: 80px;max-height: 80px"></td>
            <td>20x20x20</td>
            <td>200gr</td>
            <td>lara@example.com</td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>
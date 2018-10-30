<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Viaje</title>
    <link rel="stylesheet" type="text/css" href="css/boostrapV4w3cFix.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="js/regionesYcomunas.js"></script>
    <!-- <script src="js/validacionAgregarViajeForm.js"></script> -->
    <script>
        $(function(){
            $("#nav-bar").load("barraNavegacion.html");
        });
    </script>
</head>
<body>
<?php include 'validacionAgregarViajeForm.php';?>
<!--barra de navegacion-->
<div id="nav-bar"></div>
<!--FORMULARIO AGREGAR VIAJE-->
<div id="agregarViaje" class="container">
    <form name="formAgregarViaje" id="formAgregarViaje" class="form-horizontal" onsubmit="return validateForm()"
          action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <!--region origen-->
        <div class="form-group row">
            <label class="control-label" for="region-origen">Región origen:</label>
            <select class="form-control" id="region-origen" name="region-origen"></select>
            <span class="error">* <?php echo $regionOrigenErr;?></span>
        </div>
        <!--comuna origen-->
        <div class="form-group row">
            <label class="control-label" for="comuna-origen">Comuna origen:</label>
            <select class="form-control" id="comuna-origen" name="comuna-origen"></select>
            <span class="error">* <?php echo $comunaOrigenErr;?></span>
        </div>
        <!--region destino-->
        <div class="form-group row">
            <label class="control-label" for="region-destino">Región destino:</label>
            <select class="form-control" id="region-destino" name="region-destino"></select>
            <span class="error">* <?php echo $regionDestinoErr;?></span>
        </div>
        <!--comuna destino-->
        <div class="form-group row">
            <label class="control-label" for="comuna-destino">Comuna destino:</label>
            <select class="form-control" id="comuna-destino" name="comuna-destino"></select>
            <span class="error">* <?php echo $comunaDestinoErr;?></span>
        </div>
        <!--fecha viaje-->
        <div class="form-group row">
            <label class="control-label" for="fecha-viaje">Fecha viaje:</label>
            <input type="text" class="form-control" id="fecha-viaje" name="fecha-viaje" placeholder="aaaa-mm-dd">
            <span class="error">* <?php echo $fechaViajeErr;?></span>
        </div>
        <!--espacio disponible-->
        <div class="form-group row">
            <label class="control-label" for="espacio-disponible">Espacio disponible:</label>
            <select class="form-control" id="espacio-disponible" name="espacio-disponible">
                <option value="--">--</option>
                <option value="10x10x10">10x10x10</option>
                <option value="20x20x20">20x20x20</option>
                <option value="30x30x30">30x30x30</option>
            </select>
            <span class="error">* <?php echo $espacioDisponibleErr;?></span>
        </div>
        <!--kilos disponibles-->
        <div class="form-group row">
            <label class="control-label" for="kilos-disponibles">Kilos disponibles:</label>
            <select class="form-control" id="kilos-disponibles" name="kilos-disponibles">
                <option value="--">--</option>
                <option value="200g">200gr</option>
                <option value="500g">500gr</option>
                <option value="800g">800gr</option>
                <option value="1kg">1kg</option>
                <option value="1.5kg">1.5kg</option>
                <option value="2kg">2kg</option>
            </select>
            <span class="error">* <?php echo $kilosDisponiblesErr;?></span>
        </div>
        <!--email viajero-->
        <div class="form-group row">
            <label class="control-label" for="email">Email viajero:</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="correo@correo.cl">
            <span class="error">* <?php echo $emailViajeroErr;?></span>
        </div>
        <!--numero celular viajero-->
        <div class="form-group row">
            <label class="control-label" for="celular">Número celular viajero:</label>
            <input type="text" class="form-control" id="celular" name="celular" placeholder="569XXXXXXXX">
            <span class="error">* <?php echo $numeroCelularViajeroErr;?></span>
        </div>
        <!--boton para enviar formulario-->
        <div class="form-group row">
            <button name=”submit” id="submit" type="submit" class="btn btn-info">Agregar viaje</button>
        </div>
    </form>
</div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <!-- Fonts Google -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Calculadora de descuentos</title>
</head>
<body>
<div class="container">
    <h1>Calculadora de descuentos</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="form-group mb-4">
            <label for="precio_cono">Precio por cono:</label>
            <input type="number" class="form-control" id="precio_cono" name="precio_cono" step="0.01" required>
        </div>
        <div class="form-group mb-4">
            <label for="cantidad_conos">Cantidad de conos:</label>
            <input type="number" class="form-control" id="cantidad_conos" name="cantidad_conos" required>
        </div>
        <button type="submit" class="btn btn-primary">Calcular</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        # Obtenemos los valores del formulario
        $precio_cono = $_POST["precio_cono"];
        $cantidad_conos = $_POST["cantidad_conos"];

        # Calculamos el importe de la compra
        $importe_compra = $precio_cono * $cantidad_conos;

        # Aplicamos el primer descuento
        $descuento1 = $importe_compra * 0.05;
        $importe_compra_desc1 = $importe_compra - $descuento1;

        # Aplicamos el segundo descuento
        $descuento2 = $importe_compra_desc1 * 0.05;
        $importe_compra_desc2 = $importe_compra_desc1 - $descuento2;

        // Mostramos los resultados
        echo "<h2>Resultados:</h2>";
        echo "<p>Importe de la compra: $importe_compra</p>";
        echo "<p>Descuento 1: $descuento1</p>";
        echo "<p>Descuento 2: $descuento2</p>";
        echo "<p>Importe total del descuento: " . ($descuento1 + $descuento2) . "</p>";
        echo "<p>Importe a pagar: $importe_compra_desc2</p>";
    }
    ?>
</div>
</body>
</html>

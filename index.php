<?php
session_start();

/* Notificación solo una vez por sesión */
if (!isset($_SESSION['notificacion'])) {
    echo "<script>alert('¡Oferta especial! 20% de descuento en paquetes al Caribe');</script>";
    $_SESSION['notificacion'] = true;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agencia de Viajes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eef2f3;
        }
        .contenedor {
            width: 420px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
        }
        input, button {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
        }
        .paquete {
            background: #f4f4f4;
            padding: 10px;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="contenedor">
    <h2>Buscar Viaje</h2>

    <form action="procesar_viaje.php" method="POST">
        <input type="text" name="hotel" placeholder="Hotel" required>
        <input type="text" name="ciudad" placeholder="Ciudad" required>
        <input type="text" name="pais" placeholder="País" required>
        <input type="date" name="fechaViaje" required>
        <input type="number" name="duracion" placeholder="Duración (días)" required>
        <button type="submit">Guardar búsqueda</button>
    </form>

    <h3>Paquetes turísticos</h3>

    <div class="paquete">
        Caribe 7 días
        <form action="carrito.php" method="POST">
            <input type="hidden" name="paquete" value="Caribe 7 días">
            <button>Agregar al carrito</button>
        </form>
    </div>

    <div class="paquete">
        Europa 10 días
        <form action="carrito.php" method="POST">
            <input type="hidden" name="paquete" value="Europa 10 días">
            <button>Agregar al carrito</button>
        </form>
    </div>

    <a href="ver_carrito.php">Ver carrito</a>
</div>

</body>
</html>

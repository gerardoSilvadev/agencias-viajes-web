<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Carrito</title>
</head>
<body>

<h2>Carrito de compra</h2>

<?php
if (empty($_SESSION['carrito'])) {
    echo "<p>Carrito vacío</p>";
} else {
    echo "<ul>";
    foreach ($_SESSION['carrito'] as $item) {
        echo "<li>$item</li>";
    }
    echo "</ul>";
}
?>

<a href="index.php">Seguir comprando</a><br>
<a href="cerrar_sesion.php">Cerrar sesión</a>

</body>
</html>

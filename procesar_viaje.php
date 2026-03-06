<?php
session_start();
include 'FiltroViaje.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $viaje = new FiltroViaje(
        $_POST['hotel'],
        $_POST['ciudad'],
        $_POST['pais'],
        $_POST['fechaViaje'],
        $_POST['duracion']
    );

    $viaje->guardarEnSesion();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resumen de búsqueda</title>
</head>
<body>

<h2>Búsqueda guardada</h2>

<?php
if (isset($_SESSION['filtro'])) {
    echo "<p>" . $_SESSION['filtro']->resumen() . "</p>";
}
?>

<a href="index.php">Volver</a>

</body>
</html>

<?php
session_start();

if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}

if (isset($_POST['paquete'])) {
    $_SESSION['carrito'][] = $_POST['paquete'];
}

header("Location: ver_carrito.php");

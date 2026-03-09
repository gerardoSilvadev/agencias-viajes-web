<?php
session_start();

// Validación y sanitización de entradas
$origen  = trim(strip_tags($_POST['origen'] ?? ''));
$destino = trim(strip_tags($_POST['destino'] ?? ''));
$fecha   = $_POST['fechaSalida'] ?? '';
$pasajeros = filter_input(INPUT_POST, 'pasajeros', FILTER_VALIDATE_INT);

// Validar formato de fecha
if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $fecha)) {
    header('Location: index.php?error=fecha_invalida');
    exit;
}

// Guardar búsqueda en sesión (solo datos primitivos)
$_SESSION['busqueda_vuelo'] = [
    'origen'    => $origen,
    'destino'   => $destino,
    'fecha'     => $fecha,
    'pasajeros' => $pasajeros,
];

header('Location: resultados_vuelos.php');

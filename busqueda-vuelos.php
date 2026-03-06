<?php
// Módulo de búsqueda de vuelos

function buscarVuelos($origen, $destino, $fecha) {
    // Validar que los campos no estén vacíos
    if (empty($origen) || empty($destino) || empty($fecha)) {
        return [
            "error" => true,
            "mensaje" => "Por favor completa todos los campos"
        ];
    }

    // Mostrar en log del servidor (equivalente al console.log)
    error_log("Buscando vuelos de " . $origen . " a " . $destino);

    return [
        "error" => false,
        "mensaje" => "Buscando vuelos de $origen a $destino en fecha $fecha"
    ];
}

// Ejemplo de uso
$resultado = buscarVuelos("Santiago", "Buenos Aires", "2025-06-15");

if ($resultado["error"]) {
    echo $resultado["mensaje"];
} else {
    echo $resultado["mensaje"];
}
?>
<?php
class FiltroViaje {
    public $hotel;
    public $ciudad;
    public $pais;
    public $fechaViaje;
    public $duracion;

    public function __construct($hotel, $ciudad, $pais, $fechaViaje, $duracion) {
        $this->hotel = $hotel;
        $this->ciudad = $ciudad;
        $this->pais = $pais;
        $this->fechaViaje = $fechaViaje;
        $this->duracion = $duracion;
    }

    public function guardarEnSesion() {
        $_SESSION['filtro'] = $this;
    }

    public function resumen() {
        return "Hotel: $this->hotel | $this->ciudad, $this->pais | Fecha: $this->fechaViaje | $this->duracion días";
    }
}

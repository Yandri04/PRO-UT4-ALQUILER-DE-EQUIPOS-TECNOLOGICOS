<?php

abstract class equipo
{
    const IVA = 0.21;
    public string $nombre;
    protected int $numero;
    private float $precio;
    private bool $alquilado;

    public function __construct(string $nombre, int $numero, float $precio)
    {
        $this->nombre = $nombre;
        $this->numero = $numero;
        $this->precio = $precio;
        $this->alquilado = false;
    }
}

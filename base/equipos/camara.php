<?php
require_once __DIR__ . '/../interfaces/asegurable.php';
require_once __DIR__ . '/../equipo.php';
class camara extends equipo implements Asegurable
{
    #[Override]
    public function calcularSeguro(int $dias): float
    {
        throw new \Exception('Not implemented');
    }
    #[Override]
    public function tipo()
    {
        throw new \Exception('Not implemented');
    }
}

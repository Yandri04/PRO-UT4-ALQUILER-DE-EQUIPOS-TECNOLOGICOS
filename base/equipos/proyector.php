<?php
require_once __DIR__ . '/../equipo.php';
class proyector extends equipo
{
    #[Override]
    public function tipo()
    {
        throw new \Exception('Not implemented');
    }
}

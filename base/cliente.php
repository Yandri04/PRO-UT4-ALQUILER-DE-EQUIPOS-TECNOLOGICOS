<?php
require_once 'equipo.php';

class clientes
{
    public string $nombre;
    public int $id;
    private array $equiposAlquilados;
    private int $maxAlquilerConcurrente;


    // se crea el constructor pasandole un array vacio de equipos
    public function __construct(string $nombre, int $id, int $maxAlquilerConcurrente)
    {
        $this->nombre = $nombre;
        $this->id = $id;
        $this->equiposAlquilados = [];
        $this->maxAlquilerConcurrente = $maxAlquilerConcurrente;
    }
    // retorna los numeros de equipos
    public function numEquiposAlquilados()
    {
        return count($this->equiposAlquilados);
    }

    public function tieneAlquilado(equipo $equipo)
    {
        return in_array($equipo, $this->equiposAlquilados, true);
    }
    // pendiente
    public function devvolver(int $numEquipo){
        foreach ($this->equiposAlquilados as $key) {
            
        }
    }
}

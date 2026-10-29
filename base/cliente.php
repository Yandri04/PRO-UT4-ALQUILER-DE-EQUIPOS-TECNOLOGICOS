<?php
require_once 'equipo.php';
require_once __DIR__ . '/interfaces/resumible.php';
class clientes
{
    public string $nombre;
    public int $id;
    private array $equiposAlquilados;
    private int $maxAlquilerConcurrente;


    // se crea el constructor pasandole un array vacio de equipos
    public function __construct(string $nombre, int $id, int $maxAlquilerConcurrente = 3)
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
    public function alquilar(equipo $equipo){

    }
    
    // metodo para setear el objeto que compramos como devuelvo y quitarlo de nuetro array de prestamos
    public function devolver(int $numEquipo): void
    {
        foreach ($this->equiposAlquilados  as $indice => $equipo) {
            if ($equipo->getnumero() === $numEquipo) {
                $equipo->marcarDevuelto();
                unset($this->equiposAlquilados[$indice]);
                break;
            }
        }
    }

}

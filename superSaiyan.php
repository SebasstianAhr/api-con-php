<?php
require_once "./poo.php";
/*====================*/
//HERENCIA
/*====================*/
class SuperSaiyan extends Saiyajin
{

    // la variable clase tiene que llamarse igual para que se sobreescriba el dato
    public $clase = 'Super saiyajin';
    public function Transformacion()
    {
        if ($this->nivel_pelea >= 1500) {
            $mensaje = $this->nombre . " Se pudo transformar " . $this->clase;
        } else {
            $mensaje = $this->nombre . " No se pudo transformar " . $this->clase;
        }

        return $mensaje;
    }
};
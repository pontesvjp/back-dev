<?php

namespace Alura\Banco\Modelo;

trait AcessoPropiedades
{
    public function __get($nomeAtributo)
    {
        $metodo = "recupera" .  ucfirst($nomeAtributo);
        return $this->$metodo();
    }
}

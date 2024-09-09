<?php

namespace ScreenMatch\Calculos;

use ScreenMatch\Model\Titulo;

class CalculadoraDeMaratona 
{
    private int $duracaoMaratona = 0;

    public function incluir(Titulo $titulo): void 
    {
        $this->duracaoMaratona += $titulo->duracaoEmMinutos();
    }

    public function duracao(): int 
    {
        return $this->duracaoMaratona;
    }
}
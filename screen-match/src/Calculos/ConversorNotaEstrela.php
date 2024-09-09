<?php

namespace ScreenMatch\Calculos;

use ScreenMatch\Model\Avaliavel;

class ConversorNotaEstrela 
{
    public function converte(Avaliavel $avaliavel): float
    {
        $nota = $avaliavel->media();

        return round($nota) / 2;
    }
}
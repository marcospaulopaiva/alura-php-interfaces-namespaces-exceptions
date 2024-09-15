<?php

namespace ScreenMatch\Calculos;

use ArgumentCountError;
use DivisionByZeroError;
use ScreenMatch\Model\Avaliavel;

class ConversorNotaEstrela 
{
    public function converte(Avaliavel $avaliavel): float
    {
        try {
            $nota = $avaliavel->media();

            return round($nota) / 2;
        } 
        catch (DivisionByZeroError) {
            return 0;
        }
        catch(ArgumentCountError $erro) {
            echo $erro->getMessage() . "\n" ;
            return 0;
        }
    }
}
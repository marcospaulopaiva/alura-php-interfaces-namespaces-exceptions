<?php

namespace ScreenMatch\Model;

trait ComAvaliacao
{
    private array $notas = [];

    /**
     * @throws  \InvalidArgumentException Se a nota for negativa ou maior do que 10.
     */
    public function avalia(float $nota): void
    {
        if( $nota < 0 || $nota > 10) {
            throw new \InvalidArgumentException("Nota precisa ser entre 0 e 10");
        }

        $this->notas[] = $nota;
    }

    public function media(): float 
    {
        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);

        return $somaNotas / $quantidadeNotas;
    }
}
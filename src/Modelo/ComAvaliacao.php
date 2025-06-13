<?php

namespace ScreenMatch\Modelo;

use ScreenMatch\Exception\NotaInvalidaException;

trait ComAvaliacao {

    private array $notas = [];

    /**
     * Summary of avalia
     * @param float $nota
     * @throws NotaInvalidaException se a nota for negativa ou maior que 10
     * @return void
     */
    public function avalia(float $nota): void {

        if ($nota < 0 || $nota > 10) {
            throw new NotaInvalidaException();
        }

        $this->notas[] = $nota;
    }

    public function media(): float {

        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);

        return $somaNotas / $quantidadeNotas;
    }
}
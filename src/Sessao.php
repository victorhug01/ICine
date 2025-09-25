<?php

namespace Icine\Sistema;

use Icine\Sistema\Cinema;

class Sessao extends Cinema {
    private string $horario;
    private string $ingresso;

    public function __construct(string $nomeCinema, string $cnpj, string $ingresso, string $horario) {
        parent::__construct($nomeCinema, $cnpj);
        $this->horario = $horario;
        $this->ingresso = $ingresso;
    }

    public function getHorario(): string {
        return $this->horario;
    }

    public function getIngresso(): string {
        return $this->ingresso;
    }

}
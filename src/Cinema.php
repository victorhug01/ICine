<?php

namespace Icine\Sistema;

abstract class Cinema {
    private string $nomeCinema;
    private string $cnpj;

    public function __construct(string $nomeCinema, string $cnpj) {
        $this->nomeCinema = $nomeCinema;
        $this->cnpj = $cnpj;
    }

    protected function getNomeCinema() : string {
        return $this->nomeCinema;
    }

    protected function getCnpj() : string {
        return $this->cnpj;
    }
}
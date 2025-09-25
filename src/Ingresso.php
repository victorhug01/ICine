<?php
declare(strict_types=1);

namespace Icine\Sistema;

class Ingresso
{
    private int $numero;
    private Pessoa $pessoa;
    private Sessao $sessao;
    private float $valor;
    private int $assento;

    public function __construct(int $numero, Pessoa $pessoa, Sessao $sessao, float $valor, int $assento)
    {
        $this->numero = $numero;
        $this->pessoa = $pessoa;
        $this->sessao = $sessao;
        $this->valor = $valor;
        $this->assento = $assento;
    }

    public function getNumero(): int
    {
        return $this->numero;
    }

    public function getPessoa(): Pessoa
    {
        return $this->pessoa;
    }

    public function getSessao(): Sessao
    {
        return $this->sessao;
    }

    public function getValor(): float
    {
        return $this->valor;
    }

    public function getAssento(): int
    {
        return $this->assento;
    }
}

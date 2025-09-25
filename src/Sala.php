<?php
declare(strict_types=1);

namespace Icine\Sistema;

class Sala
{
    private int $numero;
    private int $capacidade;
    /** @var array<int,bool> assentos ocupados: chave = assento (1..capacidade) */
    private array $ocupacao = [];

    public function __construct(int $numero, int $capacidade)
    {
        $this->numero = $numero;
        $this->capacidade = $capacidade;
    }

    public function getNumero(): int
    {
        return $this->numero;
    }

    public function getCapacidade(): int
    {
        return $this->capacidade;
    }

    public function isAssentoDisponivel(int $assento): bool
    {
        if ($assento < 1 || $assento > $this->capacidade) {
            return false;
        }
        return !($this->ocupacao[$assento] ?? false);
    }

    public function ocuparAssento(int $assento): bool
    {
        if (!$this->isAssentoDisponivel($assento)) {
            return false;
        }
        $this->ocupacao[$assento] = true;
        return true;
    }

    public function getAssentosDisponiveis(): int
    {
        return $this->capacidade - count($this->ocupacao);
    }
}

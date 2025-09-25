<?php
declare(strict_types=1);

namespace Icine\Sistema;

class Cinema
{
    private string $nome;
    /** @var Sala[] */
    private array $salas = [];

    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function adicionarSala(Sala $sala): void
    {
        $this->salas[$sala->getNumero()] = $sala;
    }

    /**
     * @return Sala[]
     */
    public function getSalas(): array
    {
        return array_values($this->salas);
    }

    public function obterSala(int $numero): ?Sala
    {
        return $this->salas[$numero] ?? null;
    }
}

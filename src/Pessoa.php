<?php
declare(strict_types=1);

namespace Icine\Sistema;

class Pessoa
{
    private string $nome;
    private ?string $telefone;

    public function __construct(string $nome, ?string $telefone = null)
    {
        $this->nome = $nome;
        $this->telefone = $telefone;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getTelefone(): ?string
    {
        return $this->telefone;
    }
}

<?php
declare(strict_types=1);

namespace Icine\Sistema;

class Filme
{
    private string $titulo;
    private int $duracaoMinutos;
    private string $classificacao;

    public function __construct(string $titulo, int $duracaoMinutos, string $classificacao)
    {
        $this->titulo = $titulo;
        $this->duracaoMinutos = $duracaoMinutos;
        $this->classificacao = $classificacao;
    }

    public function getTitulo(): string
    {
        return $this->titulo;
    }

    public function getDuracao(): int
    {
        return $this->duracaoMinutos;
    }

    public function getClassificacao(): string
    {
        return $this->classificacao;
    }
}

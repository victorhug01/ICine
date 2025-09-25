<?php
declare(strict_types=1);

namespace Icine\Sistema;

class Sessao
{
    private string $id;
    private Filme $filme;
    private Sala $sala;
    private \DateTimeImmutable $horario;
    /** @var Ingresso[] */
    private array $ingressos = [];

    public function __construct(string $id, Filme $filme, Sala $sala, \DateTimeImmutable $horario)
    {
        $this->id = $id;
        $this->filme = $filme;
        $this->sala = $sala;
        $this->horario = $horario;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getFilme(): Filme
    {
        return $this->filme;
    }

    public function getSala(): Sala
    {
        return $this->sala;
    }

    public function getHorario(): \DateTimeImmutable
    {
        return $this->horario;
    }

    public function adicionarIngresso(Ingresso $ingresso): void
    {
        $this->ingressos[$ingresso->getNumero()] = $ingresso;
    }

    /**
     * @return Ingresso[]
     */
    public function getIngressos(): array
    {
        return array_values($this->ingressos);
    }

    public function isLotada(): bool
    {
        return count($this->ingressos) >= $this->sala->getCapacidade();
    }
}

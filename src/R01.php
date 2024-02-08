<?php

declare(strict_types=1);

namespace Dimob;

class R01
{
    private function __construct(
        private ?string $tipo,
        private ?string $cnpj,
        private ?string $anoCalendario,
        private ?string $delcaracaoRetificadora,
        private ?string $numeroRecido,
        private ?string $situacaoEspecial,
        private ?string $dataEventoSituacaoEspecial,
        private ?string $codigoSituacaoEspecial,
        private ?string $nomeEmpresarial,
        private ?string $cpfRfb,
        private ?string $enderecoContribuinte,
        private ?string $ufContribuinte,
        private ?string $codigoMunicipio,
        private ?string $reservado1,
        private ?string $reservado2,
        private ?string $delimitadorRegistro
    ) {

    }

    public static function create(
        ?string $cnpj,
        ?string $anoCalendario,
        ?string $delcaracaoRetificadora,
        ?string $numeroRecido,
        ?string $situacaoEspecial,
        ?string $dataEventoSituacaoEspecial,
        ?string $codigoSituacaoEspecial,
        ?string $nomeEmpresarial,
        ?string $cpfRfb,
        ?string $enderecoContribuinte,
        ?string $ufContribuinte,
        ?string $codigoMunicipio,
        ?string $reservado1,
        ?string $reservado2,
        ?string $delimitadorRegistro
    ): self {
        return new self(
            'R01',
            $cnpj,
            $anoCalendario,
            $delcaracaoRetificadora,
            $numeroRecido,
            $situacaoEspecial,
            $dataEventoSituacaoEspecial,
            $codigoSituacaoEspecial,
            $nomeEmpresarial,
            $cpfRfb,
            $enderecoContribuinte,
            $ufContribuinte,
            $codigoMunicipio,
            $reservado1,
            $reservado2,
            $delimitadorRegistro
        );
    }

    public function tipo(): ?string
    {
        return str_pad($this->tipo, 3, '0', STR_PAD_LEFT);
    }

    public function cnpj(): ?string
    {
        return str_pad($this->cnpj, 14, '0', STR_PAD_LEFT);
    }

    public function anoCalendario(): ?string
    {
        return str_pad($this->anoCalendario, 4, '0', STR_PAD_LEFT);
    }

    public function delcaracaoRetificadora(): ?string
    {
        return str_pad($this->delcaracaoRetificadora, 1, '0', STR_PAD_LEFT);
    }

    public function numeroRecido(): ?string
    {
        return str_pad($this->numeroRecido, 10, '0', STR_PAD_LEFT);
    }

    public function situacaoEspecial(): ?string
    {
        return str_pad($this->situacaoEspecial, 1, '0', STR_PAD_LEFT);
    }

    public function dataEventoSituacaoEspecial(): ?string
    {
        return str_pad($this->dataEventoSituacaoEspecial, 8, '0', STR_PAD_LEFT);
    }

    public function codigoSituacaoEspecial(): ?string
    {
        return str_pad($this->codigoSituacaoEspecial, 2, '0', STR_PAD_LEFT);
    }

    public function nomeEmpresarial(): ?string
    {
        return str_pad($this->nomeEmpresarial, 60, ' ', STR_PAD_RIGHT);
    }

    public function cpfRfb(): ?string
    {
        return str_pad($this->cpfRfb, 11, '0', STR_PAD_LEFT);
    }

    public function enderecoComtrtibuinte(): ?string
    {
        return str_pad($this->enderecoContribuinte, 120, ' ', STR_PAD_RIGHT);
    }

    public function ufContribuinte(): ?string
    {
        return str_pad($this->ufContribuinte, 2, ' ', STR_PAD_RIGHT);
    }

    public function codigoMunicipio(): ?string
    {
        return str_pad($this->codigoMunicipio, 4, '0', STR_PAD_LEFT);
    }

    public function reservado1(): ?string
    {
        return str_pad($this->reservado1, 20, ' ', STR_PAD_LEFT);
    }

    public function reservado2(): ?string
    {
        return str_pad($this->reservado2, 10, ' ', STR_PAD_LEFT);
    }

    public function delimitadorRegistro(): ?string
    {
        return str_pad($this->delimitadorRegistro, 2, ' ', STR_PAD_LEFT);
    }

    public function toArray()
    {
        return [
            'tipo' => $this->tipo(),
            'cnpj' => $this->cnpj(),
            'ano' => $this->anoCalendario(),
            'delcaracao' => $this->delcaracaoRetificadora(),
            'recido' => $this->numeroRecido(),
            'situacao' => $this->situacaoEspecial(),
            'data_evento' => $this->dataEventoSituacaoEspecial(),
            'codigo_situacao' => $this->codigoSituacaoEspecial(),
            'nome' => $this->nomeEmpresarial(),
            'cpf' => $this->cpfRfb(),
            'endereco' => $this->enderecoComtrtibuinte(),
            'uf' => $this->ufContribuinte(),
            'municipio' => $this->codigoMunicipio(),
            'reservado_1' => $this->reservado1(),
            'reservado_2' => $this->reservado2(),
            'delimitador' => $this->delimitadorRegistro()
        ];
    }
}
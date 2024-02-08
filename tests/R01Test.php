<?php


namespace Tests;

use Dimob\R01;
use PHPUnit\Framework\TestCase;

class R01Test extends TestCase
{
    public function testInstanceOf()
    {
        $r01 = R01::create(
            '123456789',
            '2020',
            '1',
            '123',
            '1',
            '2020-01-01',
            '1',
            'Teste',
            '123456789',
            'Teste',
            'SP',
            '123',
            '',
            '',
            ''
        );

        $this->assertInstanceOf(R01::class, $r01);
        $this->assertEquals('R01', $r01->tipo());
        $this->assertEquals('00000123456789', $r01->cnpj());
        $this->assertEquals('2020', $r01->anoCalendario());
        $this->assertEquals('1', $r01->delcaracaoRetificadora());
        $this->assertEquals('0000000123', $r01->numeroRecido());
        $this->assertEquals('1', $r01->situacaoEspecial());
        $this->assertEquals('2020-01-01', $r01->dataEventoSituacaoEspecial());
        $this->assertEquals('01', $r01->codigoSituacaoEspecial());
        $this->assertEquals('Teste                                                       ', $r01->nomeEmpresarial());
        $this->assertEquals('00123456789', $r01->cpfRfb());
        $this->assertEquals('Teste                                                                                                                   ', $r01->enderecoComtrtibuinte());
        $this->assertEquals('SP', $r01->ufContribuinte());
        $this->assertEquals('0123', $r01->codigoMunicipio());
        $this->assertEquals('                    ', $r01->reservado1());
        $this->assertEquals('          ', $r01->reservado2());
        $this->assertEquals('  ', $r01->delimitadorRegistro());
    }

}
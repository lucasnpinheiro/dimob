<?php

declare(strict_types=1);

namespace Dimob;

abstract class Base
{
    abstract public function toArray();

    protected function blank(int $qtd)
    {
        return str_pad('', $qtd, ' ', STR_PAD_LEFT);
    }

    protected function zero(int $qtd)
    {
        return str_pad('', $qtd, '0', STR_PAD_LEFT);
    }

    public function __toString()
    {
        return implode('', $this->toArray());
    }

    protected function numberFormat(string $str): string
    {
        $str = str_replace(['.', ','], ['', '.'], $str);
        $str = number_format((float) $str, 2, '', '');
        return str_pad($str, 14, '0', STR_PAD_LEFT);
    }
}
<?php


namespace Dimob;

class Export
{
    private Header $header;
    private R01 $r01;
    private array $r02List = [];
    private function __construct()
    {
    }

    public static function create()
    {
        return new self();
    }

    public function addHeader(Header $header)
    {
        $this->header = $header;
    }

    public function addR01(R01 $r01)
    {
        $this->r01 = $r01;
    }

    public function addR02(R02 $r02)
    {
        $this->r02List[] = $r02;
    }

    public function toArray(): array
    {
        return [
            (string) $this->header,
            (string) $this->r01,
            implode("\n", $this->r02List),
            (string) $this->addT9()
        ];
    }

    public function generate()
    {
        return implode("\n", $this->toArray());
    }

    public function addT9()
    {
        return T9::create(
            $this->header->cnpj(),
            count($this->r02List)
        );
    }
}
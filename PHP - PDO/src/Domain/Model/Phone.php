<?php

namespace Alura\Pdo\Domain\Model;

class phone
{

    private ?int $id;
    private string $areaCode;
    private string $number;

    public function __construct(int $id, string $areaCode, string $number)
    {
        $this->id = $id;
        $this->areaCode = $areaCode;
        $this->number = $number;
    }
}

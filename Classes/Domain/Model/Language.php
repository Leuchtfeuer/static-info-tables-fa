<?php
declare(strict_types=1);

namespace SJBR\StaticInfoTables\Domain\Model;

class Language extends AbstractEntity
{
    protected $nameFa = '';

    public function getNameFa(): string
    {
        return $this->nameFa;
    }

    public function setNameFa(string $nameFa)
    {
        $this->nameFa = $nameFa;
    }
}
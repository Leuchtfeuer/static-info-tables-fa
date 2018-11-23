<?php
declare(strict_types=1);

namespace SJBR\StaticInfoTables\Domain\Model;

class Currency extends AbstractEntity
{
    protected $nameFa = '';

    protected $subdivisionNameFa = '';

    public function getNameFa(): string
    {
        return $this->nameFa;
    }

    public function setNameFa(string $nameFa)
    {
        $this->nameFa = $nameFa;
    }

    public function getSubdivisionNameFa(): string
    {
        return $this->subdivisionNameFa;
    }

    public function setSubdivisionNameFa(string $subdivisionNameFa)
    {
        $this->subdivisionNameFa = $subdivisionNameFa;
    }
}
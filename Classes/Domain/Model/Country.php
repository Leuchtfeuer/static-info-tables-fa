<?php
declare(strict_types=1);

namespace SJBR\StaticInfoTables\Domain\Model;

class Country extends AbstractEntity
{
    protected $shortNameFa = '';

    public function getShortNameFa(): string
    {
        return $this->shortNameFa;
    }

    public function setShortNameFa(string $shortNameFa)
    {
        $this->shortNameFa = $shortNameFa;
    }
}
<?php
declare(strict_types=1);

namespace SJBR\StaticInfoTables\Domain\Model;

class Country extends AbstractEntity
{
    /**
     * @var string
     */
    protected $shortNameFa = '';

    /**
     * @return string
     */
    public function getShortNameFa(): string
    {
        return $this->shortNameFa;
    }

    /**
     * @param string $shortNameFa
     */
    public function setShortNameFa(string $shortNameFa)
    {
        $this->shortNameFa = $shortNameFa;
    }
}
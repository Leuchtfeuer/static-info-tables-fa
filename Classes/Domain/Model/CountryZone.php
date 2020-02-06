<?php
declare(strict_types = 1);

namespace SJBR\StaticInfoTables\Domain\Model;

class CountryZone extends AbstractEntity
{
    /**
     * @var string
     */
    protected $nameFa = '';

    /**
     * @return string
     */
    public function getNameFa(): string
    {
        if ($this->nameFa === '') {
            return $this->getNameLocalized();
        }

        return $this->nameFa;
    }

    /**
     * @param string $nameFa
     */
    public function setNameFa(string $nameFa)
    {
        $this->nameFa = $nameFa;
    }
}

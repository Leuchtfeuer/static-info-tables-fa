<?php
declare(strict_types=1);

namespace SJBR\StaticInfoTables\Domain\Model;

class Currency extends AbstractEntity
{
    /**
     * @var string
     */
    protected $nameFa = '';

    /**
     * @var string
     */
    protected $subdivisionNameFa = '';

    /**
     * @return string
     */
    public function getNameFa(): string
    {
        return $this->nameFa;
    }

    /**
     * @param string $nameFa
     */
    public function setNameFa(string $nameFa)
    {
        $this->nameFa = $nameFa;
    }

    /**
     * @return string
     */
    public function getSubdivisionNameFa(): string
    {
        return $this->subdivisionNameFa;
    }

    /**
     * @param string $subdivisionNameFa
     */
    public function setSubdivisionNameFa(string $subdivisionNameFa)
    {
        $this->subdivisionNameFa = $subdivisionNameFa;
    }
}
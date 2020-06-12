<?php

declare(strict_types=1);

/*
 * This file is part of the "Static Info Tables (FA)" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * Florian Wessels <f.wessels@Leuchtfeuer.com>, Leuchtfeuer Digital Marketing
 */

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

<?php

declare(strict_types=1);

/*
 * This file is part of the "Static Info Tables (FA)" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * Max Rösch <m.roesch@Leuchtfeuer.com>, Leuchtfeuer Digital Marketing
 */

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

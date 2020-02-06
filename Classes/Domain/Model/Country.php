<?php
declare(strict_types = 1);

namespace SJBR\StaticInfoTables\Domain\Model;

/***
 *
 * This file is part of the "Static Info Tables (FA)" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Florian Wessels <f.wessels@bitmotion.de>, Bitmotion GmbH
 *
 ***/

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

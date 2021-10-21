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

return [
    \SJBR\StaticInfoTables\Domain\Model\Country::class => [
        'tableName' => 'static_countries',
        'properties' => [
            'shortNameFa' => [
                'fieldName' => 'cn_short_fa',
            ],
        ],
    ],
    \SJBR\StaticInfoTables\Domain\Model\CountryZone::class => [
        'tableName' => 'static_country_zones',
        'properties' => [
            'nameFa' => [
                'fieldName' => 'zn_name_fa',
            ],
        ],
    ],
    \SJBR\StaticInfoTables\Domain\Model\Currency::class => [
        'tableName' => 'static_currencies',
        'properties' => [
            'nameFa' => [
                'fieldName' => 'cu_name_fa',
            ],
            'subdivisionNameFa' => [
                'fieldName' => 'cu_sub_name_fa',
            ],
        ],
    ],
    \SJBR\StaticInfoTables\Domain\Model\Language::class => [
        'tableName' => 'static_languages',
        'properties' => [
            'nameFa' => [
                'fieldName' => 'lg_name_fa',
            ],
        ],
    ],
    \SJBR\StaticInfoTables\Domain\Model\Territory::class => [
        'tableName' => 'static_territories',
        'properties' => [
            'nameFa' => [
                'fieldName' => 'tr_name_fa',
            ],
        ],
    ],
];

<?php
defined('TYPO3_MODE') || die;

call_user_func(
    function ($additionalFields, $dataSetName) {
        \Bitmotion\StaticInfoTablesFa\Provider\TcaProvider::generateAndRegisterTca($additionalFields, $dataSetName);
    },
    ['cn_short_en' => 'cn_short_fa'],
    'static_countries'
);

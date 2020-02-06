<?php
defined('TYPO3_MODE') || die;

call_user_func(
    function ($additionalFields, $dataSetName) {
        \Bitmotion\StaticInfoTablesAr\Provider\TcaProvider::generateAndRegisterTca($additionalFields, $dataSetName);
    },
    ['lg_name_en' => 'lg_name_fa'],
    'static_languages'
);

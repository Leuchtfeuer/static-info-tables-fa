<?php
defined('TYPO3_MODE') || die;

call_user_func(
    function ($additionalFields, $dataSetName) {
        \Bitmotion\StaticInfoTablesFa\Provider\TcaProvider::generateAndRegisterTca($additionalFields, $dataSetName);
    },
    ['cu_name_en' => 'cu_name_fa', 'cu_sub_name_en' => 'cu_sub_name_fa'],
    'static_currencies'
);

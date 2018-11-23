<?php
defined('TYPO3_MODE') || die;

$initialize = function ($dataSetName) {
    $additionalFields = [
        'cu_name_en' => 'cu_name_fa',
        'cu_sub_name_en' => 'cu_sub_name_fa',
    ];

    \Bitmotion\StaticInfoTablesFa\Provider\TcaProvider::generateAndRegisterTca($additionalFields, $dataSetName);
};
$initialize('static_currencies');
unset($initialize);

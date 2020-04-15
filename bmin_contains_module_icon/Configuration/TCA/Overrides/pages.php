<?php


$GLOBALS['TCA']['pages']['columns']['module']['config']['items'][] =
    [
        'LLL:EXT:bmin_contains_module_icon/Resources/Private/Language/locallang.xlf:custom_folder_type',
        'bmin_contains_icon', // database value in module field
        'mimetypes-media-video' // icon identifier
    ];
//                                                format: contains-{database_value_from_above}
$GLOBALS['TCA']['pages']['ctrl']['typeicon_classes']['contains-bmin_contains_icon'] = 'overlay-advanced';

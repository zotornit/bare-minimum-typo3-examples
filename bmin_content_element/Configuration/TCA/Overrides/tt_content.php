<?php


/**
 * Set CE page module typeicon
 */
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['bmin_content_element_my_content_element'] = 'content-media';

/**
 * Add a custom category to "New Element Wizzard"
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'LLL:EXT:bmin_content_element/Resources/Private/Language/Tca.xlf:bmin_content_element_my_content_element.type_dropdown.my_category',
        '--div--'
    ]
);




/**
 * Adds the content element to the "Type" dropdown, after textmedia
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        #150
        'LLL:EXT:bmin_content_element/Resources/Private/Language/Tca.xlf:bmin_content_element_my_content_element.type_dropdown.title',
        'bmin_content_element_my_content_element',
        'content-media',
    ],
    'textmedia',
    'after'
);

/**\
 * Adds the content element to the "Type" dropdown, in our custom category
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        #180
        'LLL:EXT:bmin_content_element/Resources/Private/Language/Tca.xlf:bmin_content_element_my_content_element.type_dropdown.title2',
        'bmin_content_element_my_content_element',
        'content-media',
    ],
    // empty will add to the end of last category item, which will be ours right now
    '',
    ''
);


/**
 * Set the fields of our CE, this is default for text CE
 */
$GLOBALS['TCA']['tt_content']['types']['bmin_content_element_my_content_element'] = [
    'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            --palette--;;headers,
            bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
            --palette--;;frames,
            --palette--;;appearanceLinks,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
            --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;;access,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
            categories,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
            rowDescription,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
    ',
    'columnsOverrides' => [
        'bodytext' => [
            'config' => [
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
            ],
        ],
    ],
];

<?php


call_user_func(
    function()
    {

        /* must be ext_localconf.php !! */
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:bmin_content_element/Configuration/TSConfig/page.typoscript">'
        );

    }
);




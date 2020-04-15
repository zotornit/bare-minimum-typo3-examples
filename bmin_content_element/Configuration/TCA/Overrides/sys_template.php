<?php

// Add setup.typoscript as static template
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'bmin_content_element',
    'Configuration/TypoScript',
    'Content Element TypoScript'
);

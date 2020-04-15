<?php

// Add an entry in the static template list found in sys_templates for static TS
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'bmin_content_element',
    'Configuration/TypoScript',
    'Content Element TypoScript'
);

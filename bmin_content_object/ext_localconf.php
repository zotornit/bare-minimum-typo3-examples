<?php
defined('TYPO3_MODE') or die();


// Register all available content objects
$GLOBALS['TYPO3_CONF_VARS']['FE']['ContentObjects'] = array_merge($GLOBALS['TYPO3_CONF_VARS']['FE']['ContentObjects'], [
    'JAVA_SCRIPT'             => \BMINCONTENTOBJECT\BminContentObject\ContentObject\JavaScriptContentObject::class
]);

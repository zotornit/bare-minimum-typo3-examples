<?php

$EM_CONF['bmin_content_object'] = array(
    'title' => 'TYPO3 Bare Minimum -> Custom Content object (cObject)',
    'description' => 'The bare minimum setup for a custom content object (cObject)',
    'category' => 'misc',
	'author' => 'Thomas Pronold',
    'author_email' => 'tp@zotorn.de',
	'author_company' => 'Zotorn IT | zotorn.de',
    'state' => 'beta',
    'uploadfolder' => false,
    'clearCacheOnLoad' => 1,
    'version' => '0.0.1',
    'constraints' =>
        array(
            'depends' =>
                array(
                    'typo3' => '8.7.0-10.4.99',
                    'php' => '7.2.0-7.4.99'
                ),
            'conflicts' =>
                array(),
            'suggests' =>
                array(),
        ),
    'autoload' => [
        'psr-4' => [
            'BMINCONTENTOBJECT\\BminContentObject\\' => 'Classes'
        ]
    ]
);


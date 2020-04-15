<?php

$EM_CONF['bmin_content_element'] = array(
    'title' => 'TYPO3 Bare Minimum -> Custom Content Element',
    'description' => 'The bare minimum setup for a custom content element',
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
                    'typo3' => '8.5.0-10.5.99',
                    'php' => '7.2.0-7.4.99'
                ),
            'conflicts' =>
                array(),
            'suggests' =>
                array(),
        ),
    'autoload' => [
        'psr-4' => [
            'BMINCONTENTELEMENT\\BminContentElement\\' => 'Classes'
        ]
    ]
);


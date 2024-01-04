<?php

/**
 * Extension Manager/Repository config file for ext "packages".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'packages',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
            'fluid_styled_content' => '11.5.0-11.5.99',
            'rte_ckeditor' => '11.5.0-11.5.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Test\\Packages\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'oussema harrabi',
    'author_email' => 'harrabi.oussema.pro@hotmail.com',
    'author_company' => 'test',
    'version' => '1.0.0',
];

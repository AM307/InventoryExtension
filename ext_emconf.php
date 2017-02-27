<?php
$EM_CONF[$_EXTKEY] = array(
    'title' => 'Inventory List',
    'description' => 'An extension to manage a stock.',
    'category' => 'plugin',
    'author' => 'AM307',
    'author_company' => '',
    'author_email' => '',
    'dependencies' => 'extbase,fluid',
    'state' => 'alpha',
    'clearCacheOnLoad' => '1',
    'version' => '0.0.1',
    'constraints' => array(
        'depends' => array(
            'typo3' => '8.0.0-8.99.99',
            'extbase' => '',
            'fluid' => '',
        )
    )
);
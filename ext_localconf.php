<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

call_user_func(
    function($extKey) {
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'AM307.Inventory',
            'MATList',
            array('Inventory' => 'list')
        );
    },
    $_EXTKEY
);

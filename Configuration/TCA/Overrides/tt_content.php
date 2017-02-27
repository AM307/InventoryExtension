<?php

call_user_func(function($packageKey) {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
        'AM307.' . $packageKey,
        'List',
        'The Inventory List'
    );
}, $_EXTKEY);

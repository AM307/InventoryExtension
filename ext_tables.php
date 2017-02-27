<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

$TCA['tx_inventory_domain_model_product'] = array (
    'ctrl' => array (
        'title' => 'Inventory',
        'label' => 'name',
    ),
    'columns' => array(
        'name' => array(
            'label' => 'Name',
            'config' => array(
                'type' => 'input',
                'size' => '20',
                'eval' => 'trim,required'
            )
        ),
        'description' => array(
            'label' => 'Description',
            'config' => array(
                'type' => 'text',
                'eval' => 'trim,required'
            )
        ),
        'quantity' => array(
            'label' => 'Stock Quantity',
            'config' => array(
                'type' => 'input',
                'size' => '4',
                'eval'=> 'int'
            )
        ),
    ),
    'types' => array(
        '0' => array('showitem' => 'name, description, quantity')
    )
);

call_user_func(function($packageKey) {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
        'AM307.' . $packageKey,
        'List',
        'The Inventory List'
    );
}, $_EXTKEY);

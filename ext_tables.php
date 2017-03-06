<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

$TCA['tx_inventory_domain_model_category'] = array (
    'ctrl' => array (
        'title' => 'Category',
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
    ),
    'types' => array(
        '0' => array('showitem' => 'name')
    )
);

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
            'label' => 'Beschreibung',
            'config' => array(
                'type' => 'text',
                'eval' => 'trim,required'
            )
        ),
        'quantity' => array(
            'label' => 'Stückzahl',
            'config' => array(
                'type' => 'input',
                'size' => '4',
                'eval'=> 'int'
            )
        ),
        'category' => array(
            'label' => 'Kategorie',
            'config' => array(
                'type' => 'select',
                'renderType' => 'selectSingle',
                'maxitems' => 1,
                'foreign_table' => 'tx_inventory_domain_model_category',
                'eval' => 'required'
            )
        )
    ),
    'types' => array(
        '0' => array('showitem' => 'name, description, quantity, category')
    )
);

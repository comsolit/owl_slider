<?php

return array(
    'ctrl' => array(
        'title' => 'LLL:EXT:owl_slider/Resources/Private/Language/locallang_db.xlf:tx_owlslider_domain_model_item',
        'label' => 'itemname',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'dividers2tabs' => TRUE,
        'sortby' => 'sorting',
        'versioningWS' => TRUE,
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => array(
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime'
        ),
        'searchFields' => 'itemname,itemimage,itemlink,',
        'iconfile' => 'EXT:owl_slider/Resources/Public/Icons/tx_owlslider_domain_model_item.png'
    ),
    'interface' => array(
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, itemname, itemimage, itemlink, itemcontent'
    ),
    'types' => array(
        '1' => array(
            'showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, itemname, itemimage, itemlink, itemcontent, column_offset,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,starttime, endtime',
        )
    ),
    'palettes' => array(
        '1' => array(
            'showitem' => ''
        )
    ),
    'columns' => array(
        'sys_language_uid' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => array(
                'type' => 'select',
                'default' => 0,
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ],
                ],
            )
        ),
        'l10n_parent' => array(
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_owlslider_domain_model_item',
                'foreign_table_where' => 'AND tx_owlslider_domain_model_item.pid=###CURRENT_PID### AND tx_owlslider_domain_model_item.sys_language_uid IN (-1,0)',
                'default' => 0,
            ]
        ),
        'l10n_diffsource' => array(
            'config' => array(
                'type' => 'passthrough'
            )
        ),
        't3ver_label' => array(
            'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'max' => 255
            )
        ),
        'hidden' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
            'config' => array(
                'type' => 'check'
            )
        ),
        'starttime' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => array(
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 13,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
                'range' => array(
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
                ),
                'behaviour' => array(
                    'allowLanguageSynchronization' => TRUE
                )
            )
        ),
        'endtime' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => array(
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 13,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
                'range' => array(
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
                ),
                'behaviour' => array(
                    'allowLanguageSynchronization' => TRUE
                )
            )
        ),
        'itemname' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:owl_slider/Resources/Private/Language/locallang_db.xlf:tx_owlslider_domain_model_item.itemname',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            )
        ),
        'itemimage' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:owl_slider/Resources/Private/Language/locallang_db.xlf:tx_owlslider_domain_model_item.itemimage',
            'config' => array(
                'type' => 'group',
                'internal_type' => 'file',
                'uploadfolder' => 'uploads/tx_owlslider',
                'minitems' => 1,
                'size' => 1,
                'maxitems' => 1,
                'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
                'disallowed' => ''
            )
        ),
        'itemlink' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:owl_slider/Resources/Private/Language/locallang_db.xlf:tx_owlslider_domain_model_item.itemlink',
            'config' => array(
                'type' => 'input',
                'size' => '15',
                'max' => '255',
                'eval' => 'trim',
                'renderType' => 'inputLink',
                'wizards' => array(
                    '_PADDING' => 2,
                    'link' => array(
                        'type' => 'popup',
                        'title' => 'Link',
                        'icon' => 'actions-wizard-link',
                        'module' => array(
                            'name' => 'wizard_link',
                            'urlParameters' => array(
                                'mode' => 'wizard'
                            )
                        ),
                        'JSopenParams' => 'height=300,width=500,status=0,menubar=0,scrollbars=1'
                    )
                ),
                'softref' => 'typolink'
            )
        ),
        'itemcontent' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:owl_slider/Resources/Private/Language/locallang_db.xlf:tx_owlslider_domain_model_item.itemcontent',
            'config' => array(
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
                'defaultExtras' => 'richtext:rte_transform[mode=ts_css]',
                'wizards' => array(
                    'RTE' => array(
                        'icon' => 'actions-wizard-rte',
                        'notNewRecords' => 1,
                        'RTEonly' => 1,
                        'module' => array(
                            'name' => 'wizard_rte'
                        ),
                        'wizard_rte',
                        'title' => 'LLL:EXT:cms/locallang_ttc.xlf:bodytext.W.RTE',
                        'type' => 'script'
                    )
                )
            ),
        )
    )
);

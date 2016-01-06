<?php

if (! defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    $_EXTKEY,
    'Owlslider',
    'owlSlider'
);

$pluginSignature = str_replace('_', '', $_EXTKEY) . '_owlslider';

$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    $pluginSignature,
    'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_owlslider.xml'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    $_EXTKEY,
    'Configuration/TypoScript', 'owlSlider'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
    'tx_owlslider_domain_model_item',
    'EXT:owl_slider/Resources/Private/Language/locallang_csh_tx_owlslider_domain_model_item.xlf'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages(
    'tx_owlslider_domain_model_item'
);

$TCA['tx_owlslider_domain_model_item'] = array(
    'ctrl' => array(
        'title' => 'LLL:EXT:owl_slider/Resources/Private/Language/locallang_db.xlf:tx_owlslider_domain_model_item',
        'label' => 'itemname',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'dividers2tabs' => TRUE,
        'sortby' => 'sorting',
        'versioningWS' => 2,
        'versioning_followPages' => TRUE,
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
        'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Item.php',
        'iconfile' => \TYPO3\CMS\Core\Utility\GeneralUtility::compat_version('7.5')
                ? 'EXT:owl_slider/Resources/Public/Icons/tx_owlslider_domain_model_item.png'
                : \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_owlslider_domain_model_item.png'
    )
);

include_once(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Classes/PHP/tx_owlslider_addFieldsToFlexForm.php');

?>
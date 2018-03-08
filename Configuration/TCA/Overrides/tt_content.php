<?php
defined('TYPO3_MODE') or die();

$extKey = 'owl_slider';

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    $extKey,
    'Owlslider',
    'owlSlider'
);

$pluginSignature = str_replace('_', '', $extKey) . '_owlslider';

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    $pluginSignature,
    'FILE:EXT:' . $extKey . '/Configuration/FlexForms/flexform_owlslider.xml'
);
?>
<?php

if (! defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
    'tx_owlslider_domain_model_item',
    'EXT:owl_slider/Resources/Private/Language/locallang_csh_tx_owlslider_domain_model_item.xlf'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages(
    'tx_owlslider_domain_model_item'
);

include_once(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Classes/PHP/tx_owlslider_addFieldsToFlexForm.php');

?>
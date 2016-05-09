<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Comsolit.' . $_EXTKEY,
    'Owlslider',
    array(
        'Item' => 'list, show'
    ),
    // non-cacheable actions
    array(
        'Item' => ''
    )
);

?>

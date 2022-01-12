<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Comsolit.owl_slider',
    'Owlslider',
    array(
        'Item' => 'list, show'
    ),
    // non-cacheable actions
    array(
        'Item' => ''
    )
);

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['owlSliderItemImage']
    = \Comsolit\OwlSlider\Updates\ItemImageUpdateWizard::class;
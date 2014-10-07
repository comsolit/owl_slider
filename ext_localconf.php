<?php
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'TYPO3.' . $_EXTKEY,
	'Owlslider',
	array(
		'Item' => 'list, show',
		
	),
	// non-cacheable actions
	array(
		'Item' => '',
		
	)
);


?>
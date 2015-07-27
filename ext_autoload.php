<?php
$extensionClassesPath = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('owl_slider') . 'Classes/';
return array(
    'TYPO3\OwlSlider\ViewHelpers\TypolinkViewHelper' => $extensionClassesPath . 'ViewHelpers/TypolinkViewHelper.php',
    'TYPO3\OwlSlider\ViewHelpers\AddJsFooterInlineCodeViewHelper' => $extensionClassesPath . 'ViewHelpers/AddJsFooterInlineCodeViewHelper.php'
);
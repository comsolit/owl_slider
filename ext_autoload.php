<?php
$extensionClassesPath = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('owl_slider') . 'Classes/';
return array(
    'Comsolit\OwlSlider\ViewHelpers\TypolinkViewHelper' => $extensionClassesPath . 'ViewHelpers/TypolinkViewHelper.php',
    'Comsolit\OwlSlider\ViewHelpers\AddJsFooterInlineCodeViewHelper' => $extensionClassesPath . 'ViewHelpers/AddJsFooterInlineCodeViewHelper.php'
);
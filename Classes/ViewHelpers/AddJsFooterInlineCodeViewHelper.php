<?php

namespace Comsolit\OwlSlider\ViewHelpers;

class AddJsFooterInlineCodeViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper
{
    /**
     *
     * @var \TYPO3\CMS\Core\Page\PageRenderer
     */
    protected $pageRenderer;

    /**
     *
     * @param \TYPO3\CMS\Core\Page\PageRenderer $pageRenderer
     */
    public function injectPageRenderer(\TYPO3\CMS\Core\Page\PageRenderer $pageRenderer)
    {
        $this->pageRenderer = $pageRenderer;
    }

    public function initializeArguments()
    {
        parent::initializeArguments();
        $this->registerArgument("name", "string", "", false);
        $this->registerArgument("compress", "boolean", "");
        $this->registerArgument("forceOnTop", "boolean", "");
        $this->registerArgument("excludeFromConcatenation", "boolean", "");
    }

    public function render()
    {
        $block = $this->renderChildren();
        $pageRenderer = $this->getPageRenderer();

        $pageRenderer->addJsFooterFile(
            \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::siteRelPath('owl_slider') . 'Resources/Public/owl-carousel/owl.carousel.min.js',
            '',
            $this->arguments['compress'],
            '',
            '',
            $this->arguments['excludeFromConcatenation']
        );

        $this->pageRenderer->addJsFooterInlineCode(
            $this->arguments['name'],
            $block,
            $this->arguments['compress'],
            $this->arguments['forceOnTop']
        );
        return NULL;
    }

    /**
     * @return PageRenderer
     */
    private function getPageRenderer()
    {
        return \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\CMS\Core\Page\PageRenderer');
    }
}

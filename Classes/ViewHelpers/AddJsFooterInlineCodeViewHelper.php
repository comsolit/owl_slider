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

    /**
     *
     * @param string $name
     * @param string $compress
     * @param string $forceOnTop
     * @param string $excludeFromConcatenation
     * @return NULL
     */
    public function render($name, $compress = FALSE, $forceOnTop = FALSE, $excludeFromConcatenation = TRUE)
    {
        $block = $this->renderChildren();
        $pageRenderer = $this->getPageRenderer();

        $pageRenderer->addJsFooterFile(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::siteRelPath(owl_slider) . 'Resources/Public/owl-carousel/owl.carousel.min.js', '', $compress, '', '', $excludeFromConcatenation);

        $this->pageRenderer->addJsFooterInlineCode($name, $block, $compress, $forceOnTop);
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

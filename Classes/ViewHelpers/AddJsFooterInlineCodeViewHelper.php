<?php

namespace TYPO3\OwlSlider\ViewHelpers;

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
     * @return NULL
     */
    public function render($name, $compress = FALSE, $forceOnTop = FALSE)
    {
        $block = $this->renderChildren();
        $this->pageRenderer->addJsFooterInlineCode($name, $block, $compress, $forceOnTop);
        return NULL;
    }
}

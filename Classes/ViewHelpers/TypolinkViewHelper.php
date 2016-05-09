<?php

namespace Comsolit\OwlSlider\ViewHelpers;

class TypolinkViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper
{
    /**
     *
     * @param string $parameter
     * @param string $target
     * @param int $noCache
     * @param int $useCacheHash
     * @param array $additionalParams
     * @param string $ATagParams
     * @return mixed
     */
    public function render($parameter, $target = '', $noCache = 0, $useCacheHash = 1, $additionalParams = array(), $ATagParams = '')
    {
        $typoLinkConf = array(
            'parameter' => $parameter
        );

        if ($target) {
            $typoLinkConf['target'] = $target;
        }

        if ($noCache) {
            $typoLinkConf['no_cache'] = 1;
        }

        if ($useCacheHash) {
            $typoLinkConf['useCacheHash'] = 1;
        }

        if (count($additionalParams)) {
            $typoLinkConf['additionalParams'] = \TYPO3\CMS\Core\Utility\GeneralUtility::implodeArrayForUrl('', $additionalParams);
        }

        if (strlen($ATagParams)) {
            $typoLinkConf['ATagParams'] = $ATagParams;
        }

        $linkText = $this->renderChildren();

        $textContentConf = array(
            'typolink.' => $typoLinkConf,
            'value' => $linkText
        );

        return $GLOBALS['TSFE']->cObj->cObjGetSingle('TEXT', $textContentConf);
    }
}
?>

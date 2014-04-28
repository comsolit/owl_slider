<?php
/*                                                                        *
 * This script belongs to the FLOW3 package "Fluid".                      *
*                                                                        *
* It is free software; you can redistribute it and/or modify it under    *
* the terms of the GNU Lesser General Public License as published by the *
* Free Software Foundation, either version 3 of the License, or (at your *
		* option) any later version.                                             *
*                                                                        *
* This script is distributed in the hope that it will be useful, but     *
* WITHOUT ANY WARRANTY; without even the implied warranty of MERCHAN-    *
* TABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU Lesser       *
* General Public License for more details.                               *
*                                                                        *
* You should have received a copy of the GNU Lesser General Public       *
* License along with the script.                                         *
* If not, see http://www.gnu.org/licenses/lgpl.html                      *
*                                                                        *
* The TYPO3 project - inspiring people to share!                         *
*                                                                        */

/**
 */
class Tx_OwlSlider_ViewHelpers_TypolinkViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {
	
	
	/**
   * @param string $parameter
   * @param string $target
   * @param int $noCache
   * @param int $useCacheHash
   * @param array $additionalParams
   * @param string $ATagParams
   * @return mixed
   */
  public function render($parameter, $target = '', $noCache = 0, $useCacheHash = 1, $additionalParams = array(), $ATagParams = '') {
    $typoLinkConf = array(
      'parameter' => $parameter,
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
      'value'     => $linkText
    );
 
    return $GLOBALS['TSFE']->cObj->cObjGetSingle('TEXT', $textContentConf);
  }
}
?>
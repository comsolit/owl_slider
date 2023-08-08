<?php

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\RootlineUtility;

class tx_owlslider_addFieldsToFlexForm
{
    /**
     * Adds field names to flexform
     *
     * @param $config
     * @return mixed
     */
    function addFields($config)
    {
        global $LANG;

        $pid = intval($config['flexParentDatabaseRow']['pid']);

        $ts = $this->loadTS($pid);
        $predefTsArray = $ts['plugin.']['tx_owlslider.']['settings.']['predef.'];
        $optionList = array();

        if (is_array($predefTsArray)) {
            $optionList[] = array(0 => $LANG->sL('LLL:EXT:owl_slider/Resources/Private/Language/locallang_db.xlf:tx_owlslider_domain_model_item.please_select'), 1 => '');
            foreach ($predefTsArray as $key => $value) {
                $optionList[] = array(0 => $value['name'], 1 => $value['name']);
            }
        } else {
            $optionList[] = array(0 => $LANG->sL('LLL:EXT:owl_slider/Resources/Private/Language/locallang_db.xlf:tx_owlslider_domain_model_item.no_settings'), 1 => '');
        }
        $config['items'] = array_merge($config['items'], $optionList);
        return $config;
    }

    /**
     * Loads the TypoScript for the current page
     *
     * @param int $pageUid
     * @return array The TypoScript setup
     */
    function loadTS($pageUid)
    {
        $sysPageObj = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(TYPO3\CMS\Core\Domain\Repository\PageRepository::class);
        $rootlineUtility = GeneralUtility::makeInstance(RootlineUtility::class, $pageUid);
        $rootLine = $rootlineUtility->get();

        $TSObj = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\TypoScript\ExtendedTemplateService::class);
        $TSObj->tt_track = 0;
//        $TSObj->init();
        $TSObj->runThroughTemplates($rootLine);
        $TSObj->generateConfig();
        return $TSObj->setup;
    }
}
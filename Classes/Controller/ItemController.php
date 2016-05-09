<?php

namespace Comsolit\OwlSlider\Controller;

/***************************************************************
 * Copyright notice
 *
 * (c) 2014 Andres <info@comsolit.com>, comsolit AG
 *
 * All rights reserved
 *
 * This script is part of the TYPO3 project. The TYPO3 project is
 * free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * The GNU General Public License can be found at
 * http://www.gnu.org/copyleft/gpl.html.
 *
 * This script is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 *
 * @package owl_slider
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class ItemController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * itemRepository
     *
     * @var \Comsolit\OwlSlider\Domain\Repository\ItemRepository
     * @inject
     */
    protected $itemRepository;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $settings = $this->settings;
        $customConfigName = $this->getCustomConfigName($settings);
        $customConfigArray = $this->getCustomConfigArray($customConfigName, $settings);
        $customSettings = $this->applyCustomConfig($settings, $customConfigArray);
        $items = $this->itemRepository->findAll();
        if(!empty($customSettings)) {
            $this->view->assign('settings', $customSettings);
        }
        $this->view->assign('items', $items);
    }

    /**
     * get the custom config name
     *
     * @param $settings
     * @return returns custom config name
     */
    public function getCustomConfigName($settings)
    {
        if(isset($settings['config']) && $settings['config'] != '') {
            return $settings['config'];
        }

    }

    /**
     * get the custom config array
     *
     * @param $customConfigName, $settings
     * @return returns custom config array
     */
    public function getCustomConfigArray($customConfigName, $settings)
    {
        $customSettings = $settings['predef'][$customConfigName];
        if(isset($customSettings) && is_array($customSettings)) {
            $customConfigArray = $customSettings['settings'];
            return $customConfigArray;
        }
        return array();
    }

    /**
     * apply custom config values
     *
     * @param $settings, $customConfigArray
     * @return returns settings with custom values applied
     */
    public function applyCustomConfig($settings, $customConfigArray)
    {
        $customSettings = array_replace($settings,$customConfigArray);
        return $customSettings;
    }

    /**
     * action show
     *
     * @param \Comsolit\OwlSlider\Domain\Model\Item $item
     * @return void
     */
    public function showAction(\Comsolit\OwlSlider\Domain\Model\Item $item)
    {
        $this->view->assign('item', $item);
    }
}
?>

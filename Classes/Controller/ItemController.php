<?php
namespace TYPO3\OwlSlider\Controller;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 Andres <info@comsolit.com>, comsolit AG
 *  
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 *
 *
 * @package owl_slider
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class ItemController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * itemRepository
	 *
	 * @var \TYPO3\OwlSlider\Domain\Repository\ItemRepository
	 * @inject
	 */
	protected $itemRepository;

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$items = $this->itemRepository->findAll();
		$this->view->assign('items', $items);
// 		$this->view->assign('configuration', $this->configuration);
	}

	/**
	 * action show
	 *
	 * @param \TYPO3\OwlSlider\Domain\Model\Item $item
	 * @return void
	 */
	public function showAction(\TYPO3\OwlSlider\Domain\Model\Item $item) {
		$this->view->assign('item', $item);
	}

	/**
	 * action new
	 *
	 * @param \TYPO3\OwlSlider\Domain\Model\Item $newItem
	 * @dontvalidate $newItem
	 * @return void
	 */
	public function newAction(\TYPO3\OwlSlider\Domain\Model\Item $newItem = NULL) {
		$this->view->assign('newItem', $newItem);
	}

	/**
	 * action create
	 *
	 * @param \TYPO3\OwlSlider\Domain\Model\Item $newItem
	 * @return void
	 */
	public function createAction(\TYPO3\OwlSlider\Domain\Model\Item $newItem) {
		$this->itemRepository->add($newItem);
		$this->flashMessageContainer->add('Your new Item was created.');
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param \TYPO3\OwlSlider\Domain\Model\Item $item
	 * @return void
	 */
	public function editAction(\TYPO3\OwlSlider\Domain\Model\Item $item) {
		$this->view->assign('item', $item);
	}

	/**
	 * action update
	 *
	 * @param \TYPO3\OwlSlider\Domain\Model\Item $item
	 * @return void
	 */
	public function updateAction(\TYPO3\OwlSlider\Domain\Model\Item $item) {
		$this->itemRepository->update($item);
		$this->flashMessageContainer->add('Your Item was updated.');
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param \TYPO3\OwlSlider\Domain\Model\Item $item
	 * @return void
	 */
	public function deleteAction(\TYPO3\OwlSlider\Domain\Model\Item $item) {
		$this->itemRepository->remove($item);
		$this->flashMessageContainer->add('Your Item was removed.');
		$this->redirect('list');
	}

}
?>
<?php

namespace Comsolit\OwlSlider\Domain\Model;

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
class Item extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Item name
     *
     * @var \string
     * @validate NotEmpty
     */
    protected $itemname;

    /**
     * Item image
     *
     * @var \string
     * @validate NotEmpty
     */
    protected $itemimage;

    /**
     * Item link
     *
     * @var \string
     */
    protected $itemlink;

    /**
     * Item content
     *
     * @var \string
     */
    protected $itemcontent;

    /**
     * Returns the itemname
     *
     * @return \string $itemname
     */
    public function getItemname()
    {
        return $this->itemname;
    }

    /**
     * Sets the itemname
     *
     * @param \string $itemname
     * @return void
     */
    public function setItemname($itemname)
    {
        $this->itemname = $itemname;
    }

    /**
     * Returns the itemimage
     *
     * @return \string $itemimage
     */
    public function getItemimage()
    {
        return $this->itemimage;
    }

    /**
     * Sets the itemimage
     *
     * @param \string $itemimage
     * @return void
     */
    public function setItemimage($itemimage)
    {
        $this->itemimage = $itemimage;
    }

    /**
     * Returns the itemlink
     *
     * @return \string itemlink
     */
    public function getItemlink()
    {
        return $this->itemlink;
    }

    /**
     * Sets the itemlink
     *
     * @param \string $itemlink
     * @return void
     */
    public function setItemlink($itemlink)
    {
        $this->itemlink = $itemlink;
    }

    /**
     * Returns the itemcontent
     *
     * @return \string $itemcontent
     */
    public function getItemcontent()
    {
        return $this->itemcontent;
    }

    /**
     * Sets the itemcontent
     *
     * @param \string $itemcontent
     * @return void
     */
    public function setItemcontent($itemcontent)
    {
        $this->itemcontent = $itemcontent;
    }
}
?>

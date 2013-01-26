<?php
/**
 * Copyright Zikula Foundation 2009 - Zikula Application Framework
 *
 * This work is contributed to the Zikula Foundation under one or more
 * Contributor Agreements and licensed to You under the following license:
 *
 * @license GNU/LGPLv3 (or at your option, any later version).
 * @package Zikula_Form
 *
 * Please see the NOTICE file distributed with this source code for further
 * information regarding copyright and licensing.
 */

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Zikula\Core\Doctrine\Entity\CategoryEntity;

/**
 * Category doctrine2 entity.
 *
 * @ORM\Entity
 * @ORM\Table(name="categories_category")
 *
 * @deprecated since 1.3.6
 */
class Zikula_Doctrine2_Entity_Category extends CategoryEntity
{
    public function getLocked()
    {
        return $this->getIs_locked();
    }

    public function setLocked($locked)
    {
        $this->setIs_locked($locked);
    }

    public function getLeaf()
    {
        return $this->getIs_leaf();
    }

    public function setLeaf($leaf)
    {
        $this->setIs_leaf($leaf);
    }

    public function getSortValue()
    {
        return $this->getSort_value();
    }

    public function setSortValue($sortValue)
    {
        $this->setSort_value($sortValue);
    }

    public function getDisplayName()
    {
        return $this->getDisplay_name();
    }

    public function setDisplayName($displayName)
    {
        $this->setDisplay_name($displayName);
    }

    public function getDisplayDesc()
    {
        return $this->getDisplay_desc();
    }

    public function setDisplayDesc($displayDesc)
    {
        $this->setDisplay_desc($displayDesc);
    }
}

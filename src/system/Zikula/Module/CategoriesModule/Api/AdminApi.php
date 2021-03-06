<?php
/**
 * Copyright Zikula Foundation 2009 - Zikula Application Framework
 *
 * This work is contributed to the Zikula Foundation under one or more
 * Contributor Agreements and licensed to You under the following license:
 *
 * @license GNU/LGPLv3 (or at your option, any later version).
 * @package Zikula
 *
 * Please see the NOTICE file distributed with this source code for further
 * information regarding copyright and licensing.
 */

namespace Zikula\Module\CategoriesModule\Api;

use ModUtil;
use SecurityUtil;

/**
 * Categories_Api_Admin class.
 */
class AdminApi extends \Zikula_AbstractApi
{
    /**
     * Get available admin panel links.
     *
     * @return array array of admin links.
     */
    public function getlinks()
    {
        $links = array();

        if (SecurityUtil::checkPermission('ZikulaCategoriesModule::', '::', ACCESS_READ)) {
            $links[] = array('url' => ModUtil::url('ZikulaCategoriesModule', 'admin', 'view'), 'text' => $this->__('Categories list'), 'class' => 'z-icon-es-view');
        }
        if (SecurityUtil::checkPermission('ZikulaCategoriesModule::', '::', ACCESS_ADD)) {
            $links[] = array('url' => ModUtil::url('ZikulaCategoriesModule', 'admin', 'newcat'), 'text' => $this->__('Create new category'), 'class' => 'z-icon-es-new');
        }
        if (SecurityUtil::checkPermission('ZikulaCategoriesModule::', '::', ACCESS_ADMIN)) {
            $links[] = array('url' => ModUtil::url('ZikulaCategoriesModule', 'admin', 'editregistry'), 'text' => $this->__('Category registry'), 'class' => 'z-icon-es-cubes');
            $links[] = array('url' => ModUtil::url('ZikulaCategoriesModule', 'admin', 'config'), 'text' => $this->__('Rebuild paths'), 'class' => 'z-icon-es-regenerate');
            $links[] = array('url' => ModUtil::url('ZikulaCategoriesModule', 'admin', 'preferences'), 'text' => $this->__('Settings'), 'class' => 'z-icon-es-config');
        }

        return $links;
    }
}

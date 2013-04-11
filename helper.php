<?php

/**
 * @package		Joomla.Site
 * @subpackage	mod_users_latest
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */
// no direct access
defined('_JEXEC') or die;

class modContactsInfoHelper {

    //get selected user data from the contact_details table
    static function getData($id, $component, $table, $field = 'id', $selector = '*') {
        if (1 == JComponentHelper::isEnabled($component)) {
            $db = JFactory::getDbo();
            $db->setQuery('SELECT ' . $selector . ' FROM `' . $table . '` WHERE `' . $field . '`= \'' . $id . '\'');
            $db->query();
            return $db->loadObject();
        }
    }

}

<?php

/**
 * @package	Joomla.Site
 * @subpackage	mod_users_latest
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license	GNU General Public License version 2 or later; see LICENSE.txt
 */
// no direct access
defined('_JEXEC') or die;

class modContactsInfoHelper {

    //get selected user data from the contact_details table
    static function getData($id, $component, $table, $field = 'id', $selector = '*') {
        if (1 == JComponentHelper::isEnabled($component)) {
            $db = JFactory::getDbo();
			$query = $db->getQuery(true);
			$query->select($selector);
			$query->from($table);
			$query->where($field . '= \'' . $id . '\'' );
            $db->setQuery($query);
            $db->query();
            return $db->loadObject();
        }
    }

}

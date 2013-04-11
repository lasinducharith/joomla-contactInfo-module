<?php

/**
 * @package		Joomla.Site
 * @subpackage	mod_users_latest
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */
// no direct access
defined('_JEXEC') or die;

// Include the latest functions only once
require_once dirname(__FILE__) . '/helper.php';

if ('' != $params->get('contact') AND 0 < $params->get('contact'))
    $contact = $params->get('contact');
//retrieve data from the table
if (is_numeric($contact) AND 0 < $contact) {
    $dataContact = modContactsInfoHelper::getData($contact, 'com_contact', '#__contact_details', 'id');
}
else
    unset($dataContact);

//set show/hide values
$name_hyperlink = $params->get('name_linked');
$position_attribute = $params->get('position');
$address_attribute = $params->get('address');
$postcode_attribute = $params->get('postcode');
$telephone_attribute = $params->get('telephone');
$email_attribute = $params->get('email');
$email_visible_outside = $params->get('email_visible');

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
require JModuleHelper::getLayoutPath('mod_contactInfo', $params->get('layout', 'default'));

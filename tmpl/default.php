<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_users_latest
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */
// no direct access
defined('_JEXEC') or die;
?>
<div class="contacts<?php echo $moduleclass_sfx ?>" >

    <?php
    if (!empty($dataContact)) {//if returned contact data is not empty
        //check each show/hide entry
        if ($name_hyperlink == "1") {
            $url = "index.php?option=com_contact&view=contact&id=" . $dataContact->id;
            ?>
            <a href="<?php echo $url; ?>"><?php echo $dataContact->name; ?></a><br>
            <?php
        } else {
            ?> <b> <?php echo $dataContact->name;
            ?></b><br>
            <?php
        }
        if ($position_attribute == "1") {
            echo $dataContact->con_position;
            ?><br>
                <?php
            }
            if ($address_attribute == "1") {
                echo $dataContact->address;
                ?><br>
            <?php echo $dataContact->suburb; ?><br>
            <?php echo $dataContact->state; ?><br>
            <?php echo $dataContact->country; ?><br>
            <?php
        }
        if ($postcode_attribute == "1") {
            echo $dataContact->postcode;
            ?><br>
            <?php
        }
        if ($telephone_attribute == "1") {
            echo $dataContact->telephone;
            ?><br>
            <?php
        }
        if ($email_attribute == "1") {
            if ($email_visible_outside == "1") {
                echo JHtml::_('email.cloak', $dataContact->email_to);
                ?><br>
                <?php
            } else {
                echo JHtml::_('email.cloak', $dataContact->email_to, 1, JText::_('Email'), 0);
                ?><br>
                <?php
            }
        }
    }
    ?>        

</div>

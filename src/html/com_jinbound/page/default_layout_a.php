<?php
/**
 * @package     jInbound
 * @subpackage  com_jinbound
 *
 * @copyright   Copyright (C) 2005 - 2020 Joomlashack. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('JPATH_PLATFORM') or die;

?>
<?php if (!empty($this->item->subheading)) : ?>
    <div class="row-fluid">
        <div class="span12">
            <h2><?php echo $this->escape($this->item->subheading); ?></h2>
        </div>
    </div>
<?php endif; ?>
<div class="row-fluid">
    <div class="span4">
        <div class="jinbound-image row-fluid">
            <?php echo $this->loadTemplate('image'); ?>
        </div>
        <div class="jinbound-sidebar row-fluid">
            <?php echo $this->loadTemplate('sidebar'); ?>
        </div>
    </div>
    <div class="span8">
        <div class="row-fluid">
            <div class="span8">
                <div class="row-fluid">
                    <?php echo $this->loadTemplate('body'); ?>
                </div>
                <div class="row-fluid">
                    <?php echo $this->loadTemplate('social'); ?>
                </div>
            </div>
            <div class="span4 well">
                <?php echo $this->loadTemplate('form'); ?>
            </div>
        </div>
    </div>
</div>

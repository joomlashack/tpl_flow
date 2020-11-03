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
<div class="row-fluid">
    <div class="span8">
        <div class="pull-right">
            <?php echo $this->loadTemplate('image'); ?>
        </div>
        <?php if (!empty($this->item->subheading)) : ?>
            <h2><?php echo $this->escape($this->item->subheading); ?></h2>
        <?php endif; ?>
        <?php echo $this->loadTemplate('body'); ?>
    </div>
    <div class="span4 well">
        <?php echo $this->loadTemplate('form'); ?>
    </div>
</div>
<div class="row-fluid">
    <?php echo $this->loadTemplate('social'); ?>
</div>

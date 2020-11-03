<?php
/**
 * @package     jInbound
 * @subpackage  com_jinbound
 *
 * @copyright   Copyright (C) 2005 - 2020 Joomlashack. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('JPATH_PLATFORM') or die;

$go = trim((string)$this->item->submit_text);
if (empty($go)) {
    $go = JText::_('JSUBMIT');
}

?>
<button type="submit" class="btn btn-large btn-block"><?php echo $this->escape($go); ?></button>

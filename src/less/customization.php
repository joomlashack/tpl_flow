<?php
/**
 * @package     Wright
 * @subpackage  Template File
 *
 * @copyright   Copyright (C) 2005 - 2019 Joomlashack.   All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 *
 */

// No direct access
defined('_JEXEC') or die('Restricted access');

// Access template parameters
$document = JFactory::getDocument();

// Don't modify this file!
// Set your variables overrides for variables-something.less.
// These variables overrides are defined on templateDetails.xml below 'style' field
$lessCustomizationVars = array (
    '@color_one'    => $document->params->get('color_one', '#eb684d'),
    '@color_two'    => $document->params->get('color_two', '#99cc00'),
    '@color_three'  => $document->params->get('color_three', '#34434d'),
    '@color_four'   => $document->params->get('color_four', '#eee'),
    '@color_five'   => $document->params->get('color_five', '#ccc'),
    '@color_six'   => $document->params->get('color_six', '#7996a6')
);

// Run the compiler - 'strawberry' is the default style
require_once dirname(__FILE__) . '/../wright/build/less/compiler.php';
$build = new WrightLessCompiler;
$build->start('strawberry', $lessCustomizationVars);
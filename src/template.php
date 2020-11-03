<?php
/**
 * @package     Flow
 * @subpackage  Template File
 *
 * @copyright   Copyright (C) 2005 - 2020 Joomlashack. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 *
 * Do not edit this file directly. You can copy it and create a new file called
 * 'custom.php' in the same folder, and it will override this file. That way
 * if you update the template ever, your changes will not be lost.
 */

// No direct access
defined('_JEXEC') or die('Restricted access');

?>
<doctype>
<html>
	<head>
		<w:head />
	</head>
	<body class="<?php echo $wrightBodyClass ?>">

		<div class="<?php echo $wrightContainerClass; ?> <?php echo (!$this->countModules('toolbar')) ? 'toolbar-menu-border' : ''; ?>">

            <?php if ($this->countModules('toolbar')): ?>

                <!-- toolbar -->
                <div class="toolbar-menu">
                    <w:nav containerClass="<?php echo $wrightContainerClass ?>" rowClass="<?php echo $wrightGridMode ?>" wrapClass="<?php echo $toolbar; ?> navbar-inverse" type="toolbar" name="toolbar" />
                </div>

            <?php endif; ?>

            <div class="inner-wrapper">

                <!-- header -->
                <header id="header" class="p-t-1 p-b-1">
                    <div class="row-fluid clearfix">
                        <w:logo name="menu" />
                        <div class="clear"></div>
                    </div>
                </header>

            </div>

            <!-- top -->
            <?php
            if ($this->countModules('top'))
                :
                ?>
                <div id="top">
                    <div class="inner-wrapper">
                        <w:module type="none" name="top" chrome="xhtml" />
                    </div>
                </div>
            <?php
            endif;
            ?>

			<!-- featured -->
			<?php
				if ($this->countModules('featured'))
					:
			?>
			<div id="featured" class="m-b-1">
				<w:module type="none" name="featured" />
			</div>
			<?php
				endif;
			?>

            <div class="inner-wrapper">

                <!-- grid-top -->
                <?php
                    if ($this->countModules('grid-top'))
                        :
                ?>
                <div id="grid-top" class="m-b-1 m-t-2">
                    <w:module type="row-fluid" name="grid-top" chrome="wrightflexgrid" />
                </div>
                <?php
                    endif;
                ?>
                <?php
                    if ($this->countModules('grid-top2'))
                        :
                ?>
                <!-- grid-top2 -->
                <div id="grid-top2">
                    <w:module type="row-fluid" name="grid-top2" chrome="wrightflexgrid" />
                </div>
                <?php
                    endif;
                ?>
                <div id="main-content" class="row-fluid">
                    <!-- sidebar1 -->
                    <aside id="sidebar1">
                        <w:module name="sidebar1" />
                    </aside>
                    <!-- main -->
                    <section id="main">
                        <?php
                            if ($this->countModules('above-content'))
                                :
                        ?>
                        <!-- above-content -->
                        <div id="above-content" class="m-b-2">
                            <w:module type="none" name="above-content" />
                        </div>
                        <?php
                            endif;
                        ?>
                        <?php
                            if ($this->countModules('breadcrumbs'))
                                :
                        ?>
                        <!-- breadcrumbs -->
                        <div id="breadcrumbs">
                            <w:module name="breadcrumbs" chrome="none" />
                        </div>
                        <?php
                            endif;
                        ?>
                        <!-- component -->
                        <w:content />
                        <?php
                            if ($this->countModules('below-content'))
                                :
                        ?>
                        <!-- below-content -->
                        <div id="below-content" class="m-t-2">
                            <w:module type="none" name="below-content" />
                        </div>
                        <?php
                            endif;
                        ?>
                    </section>
                    <!-- sidebar2 -->
                    <aside id="sidebar2">
                        <w:module name="sidebar2" />
                    </aside>
                </div>
            </div>

                <?php
                    if ($this->countModules('grid-bottom'))
                        :
                ?>
                <!-- grid-bottom -->
                <div id="grid-bottom">
                    <w:module type="row-fluid" name="grid-bottom" chrome="wrightflexgrid" />
                </div>
                <?php
                    endif;
                ?>
                <?php
                    if ($this->countModules('grid-bottom2'))
                        :
                ?>
                <!-- grid-bottom2 -->
                <div id="grid-bottom2">
                    <w:module type="row-fluid" name="grid-bottom2" chrome="wrightflexgrid" />
                </div>
                <?php
                    endif;
                ?>

                <?php
                if ($this->countModules('grid-bottom3'))
                    :
                    ?>
                    <!-- grid-bottom3 -->
                    <div id="grid-bottom3">
                        <w:module type="row-fluid" name="grid-bottom3" chrome="wrightflexgrid" />
                    </div>
                <?php
                endif;
                ?>

		</div>

		<!-- footer -->
		<div class="wrapper-footer">
           <div class="inner-wrapper">
               <footer id="footer" <?php
                if ($this->params->get('stickyFooter', 1))
                    :
                    ?> class="sticky"<?php
                endif;
                    ?>>

                   <?php if($backtop) : ?>
                       <div id="go-top">
                           <a class="go-top-button" href="javascript:void(0)">
                               <span class="icon-angle-up"></span>
                           </a>
                       </div>
                       <div class="go-top-label">
                           <div>
                               <?php echo JText::_('TPL_JS_WRIGHT_BACK_TO_TOP'); ?>
                           </div>
                       </div>
                   <?php endif; ?>

                    <?php
                        if ($this->countModules('bottom-menu'))
                        :
                    ?>
                    <!-- bottom-menu -->
                    <w:nav containerClass="<?php echo $wrightContainerClass ?>" rowClass="<?php echo $wrightGridMode ?>" name="bottom-menu" wrapClass="navbar-inverse navbar-transparent" />
                    <?php
                        endif;
                    ?>

                <div class="<?php echo $wrightContainerClass; ?> footer-content p-t-3">
                    <?php
                            if ($this->countModules('footer'))
                            :
                        ?>
                        <w:module type="<?php echo $wrightGridMode; ?>" name="footer" chrome="wrightflexgrid" />
                        <?php
                            endif;
                        ?>
                        <w:footer />
                    </div>
               </footer>
           </div>
		</div>
    <w:module type="none" name="debug" chrome="none" />

        <?php if($backtop) : ?>
            <script type='text/javascript' src='<?php echo JURI::root(true) ?>/templates/js_flow/js/flow.js'></script>
        <?php endif; ?>

	</body>
</html>

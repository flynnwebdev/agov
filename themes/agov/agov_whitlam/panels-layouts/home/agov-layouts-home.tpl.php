<?php
/**
 * @file
 * Provides themed representation of the home layout.
 * @copyright Copyright(c) 2012 Previous Next Pty Ltd
 * @license GPL v2 http://www.fsf.org/licensing/licenses/gpl.html
 *
 * Available variables
 * -------------------
 * $content array of panels.
 */

?>

<div class="gov-home-layout layout-3col clearfix" <?php if (!empty($css_id)) : print "id=\"$css_id\""; endif; ?>>

  <?php if (!empty($content['header'])) : ?>
    <div class="layout-3col__full">
      <?php print $content['header'];?>
    </div>
  <?php endif; ?>

  <?php if(!empty($content['main']) || !empty($content['right-sidebar'])) : ?>
    <?php if(!empty($content['main'])) : ?>
      <div class="layout-3col__left-content">
        <?php print $content['main'];?>
      </div>
    <?php endif; ?>

    <?php if(!empty($content['right-sidebar'])) : ?>
      <div class="layout-3col__right-sidebar">
        <?php print $content['right-sidebar'];?>
      </div>
    <?php endif; ?>
  <?php endif; ?>

  <?php if (!empty($content['footer'])) : ?>
    <div class="layout-3col__full">
      <?php print $content['footer'];?>
    </div>
  <?php endif; ?>

</div>

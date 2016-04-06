<?php
/**
 * @file
 * Display Suite Two Section template.
 *
 * Available variables:
 *
 * Layout:
 * - $classes: String of classes that can be used to style this layout.
 * - $contextual_links: Renderable array of contextual links.
 * - $layout_wrapper: wrapper surrounding the layout.
 *
 * Regions:
 *
 * - $top: Rendered content for the "top" region.
 * - $top_classes: String of classes that can be used to style the "top" region.
 *
 * - $bottom: Rendered content for the "bottom" region.
 * - $bottom_classes: String of classes that can be used to style the "bottom" region.
 */
?>
<<?php print $layout_wrapper; print $layout_attributes; ?> class="<?php print $classes;?> clearfix">

  <!-- Needed to activate contextual links -->
  <?php if (isset($title_suffix['contextual_links'])): ?>
    <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

    <<?php print $top_wrapper; ?> class="ds-top<?php print $top_classes; ?>">
      <?php print $top; ?>
    </<?php print $top_wrapper; ?>>

    <<?php print $bottom_wrapper; ?> class="ds-bottom<?php print $bottom_classes; ?>">
      <?php print $bottom; ?>
    </<?php print $bottom_wrapper; ?>>

</<?php print $layout_wrapper ?>>

<!-- Needed to activate display suite support on forms -->
<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>

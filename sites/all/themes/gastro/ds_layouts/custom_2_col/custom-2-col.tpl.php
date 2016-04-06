<?php
/**
 * @file
 * Display Suite Custom 2 Col template.
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
 * - $colone: Rendered content for the "col-one" region.
 * - $colone_classes: String of classes that can be used to style the "col-one" region.
 *
 * - $coltwo: Rendered content for the "col-two" region.
 * - $coltwo_classes: String of classes that can be used to style the "col-two" region.
 */
?>
<<?php print $layout_wrapper; print $layout_attributes; ?> class="<?php print $classes;?> two-section-layout clearfix">

  <!-- Needed to activate contextual links -->
  <?php if (isset($title_suffix['contextual_links'])): ?>
    <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

    <<?php print $colone_wrapper; ?> class="ds-col-one cols<?php print $colone_classes; ?>">
      <?php print $colone; ?>
    </<?php print $colone_wrapper; ?>>

    <<?php print $coltwo_wrapper; ?> class="ds-col-two cols<?php print $coltwo_classes; ?>">
      <?php print $coltwo; ?>
    </<?php print $coltwo_wrapper; ?>>

</<?php print $layout_wrapper ?>>

<!-- Needed to activate display suite support on forms -->
<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>

<?php if ($wrapper): ?><div class="<?php print $classes; ?>"<?php print $attributes; ?>><?php endif; ?>

  <?php print render($title_prefix); ?>
  <?php if($block->subject): ?>
    <h2<?php print $title_attributes; ?>><?php print $title; ?></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <?php print render($content); ?>

<?php if ($wrapper): ?></div><?php endif; ?>
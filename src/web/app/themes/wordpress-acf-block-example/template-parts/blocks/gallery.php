<?php

/**
 * Gallery Block Template.
 *
 */

$gallery = collect(get_field('gallery'));

?>

<div class="w-full h-64 overflow-hidden flex items-start">
  <?php $gallery->each(function ($image) {
    ?>
    <img
      class="inline-block h-full object-cover w-1/2 flex-1"
      src="<?php echo esc_url($image['url']) ?>"
      alt=""
    >
  <?php
  }) ?>
</div>

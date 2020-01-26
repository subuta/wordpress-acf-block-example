<?php

/**
 * Gallery Block Template.
 *
 */

$gallery = collect(get_field('gallery'));

//$recommendedPost = get_field('recommendedPost');
//
//$thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($recommendedPost));

?>

<!--
<h1 class="text-3xl font-bold"><?php echo get_field('title') ?></h1>
-->

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

<!--
<a href="<?php echo esc_url(get_permalink($recommendedPost)) ?>">
  <div class="flex p-4 items-center">
    <img class="inline-block flex-none w-32 h-32 rounded" src="<?php echo esc_url($thumbnail[0]) ?>" alt="">

    <div class="ml-4 flex-1">
      <p class="mb-4 text-2xl font-bold"><?php echo $recommendedPost->post_title ?></p>

      <div class="w-1/2 block truncate">
        <?php echo wp_trim_words($recommendedPost->post_content) ?>
      </div>
    </div>
  </div>
</a>
-->

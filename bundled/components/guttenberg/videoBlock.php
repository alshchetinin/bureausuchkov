<div class="">
  <?php
  $settings = get_field('nastrojki_video');
  $video = get_field('video');

  // Create a comma-separated list from selected values.
  if ($video) : ?>

    <video <?php echo implode(' ', $settings); ?> muted>
      <source src="<?php echo $video ?>" type='video/mp4'>
    </video>
  <?php endif; ?>

</div>
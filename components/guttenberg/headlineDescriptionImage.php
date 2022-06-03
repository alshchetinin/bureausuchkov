<div class="grid gap-x-5 gap-y-5">

  <?php get_template_part('./components/guttenberg/title-text-item', '', []) ?>

  <?php
  $i = 0;
  $images = get_field('pictures');
  $size = 'full';
  $countImage = $images ? count($images) : '';
  $grid = '';
  $gridFull = '';
  if ($countImage == 3) {
    $grid = 'grid-cols-2';
  }

  if ($images) : ?>
    <div class="grid  img-wrapper col-span-full gap-x-5 gap-y-5 <?php echo $grid ?>">
      <?php foreach ($images as $image_id) :
        

        if ($i == 0) {
          $gridFull = 'col-span-full';          
        } else {
          $gridFull = 'col-span-1';          
        }
        $i++;
        // print_r($i)
      ?>
        <img class="<?php echo $gridFull ?> object-cover" <?php awesome_acf_responsive_image($image_id, 'Full size', '1920px'); ?> alt="text" />

      <?php endforeach; ?>

    </div>
  <?php endif; ?>

</div>
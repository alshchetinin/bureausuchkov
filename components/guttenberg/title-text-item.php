<?php
$args = wp_parse_args(
  $args,
  array(
    'title' => '',
    'link' => false
  )
);
?>

<div class="space-y-5 lg:w-3/5">
<div class="">
    <h2 class="mb-5 rfs:text-2xl font-black leading-tight font-heading"><?php the_field('title') ?></h2>
    <?php
      if(get_field('subTitle')) :
    ?>
    <h3 class="rfs:text-xl font-black leading-tight font-heading"><?php the_field('subTitle') ?></h3>
    <?php endif; ?>
  </div>
  <div class="text-lg">
    <p><?php the_field('text') ?></p>
  <?php if($args['link']) : ?>
    <a class="block text-gradient bg-gradient-audit" href="<?php the_field('link') ?>" target="_blanck"><?php the_field('link_name') ?></a>
  <?php endif; ?>
  </div>


</div>

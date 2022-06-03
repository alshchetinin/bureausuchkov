<?php
$args = wp_parse_args(
  $args,
  array(
    'title' => '',
    'icon' => '',
    'link' => '',
    'gradient' => ''
  )
);
?>

<a href="<?php echo $args['link'] ?>" class="flex flex-col transition-transform transform md:items-center">    
    <div class="text-base font-bold font-heading"><?php echo $args['title']?></div>
</a>
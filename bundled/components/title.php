<?php
$args = wp_parse_args(
  $args,
  array(
    'title' => '',
  )
);
?>

<h2 class="font-black rfs:text-2xl rfs:mb-8"><?php echo $args['title'] ?></h2>
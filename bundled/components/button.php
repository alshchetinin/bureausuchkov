<?php
$args = wp_parse_args(
  $args,
  array(
    'text' => '',
    'classes' => ''
  )
);
?>

<a href="#" class="rfs:py-4 rfs:px-6 inline-block bg-blue-600  text-center rfs:text-[24px] text-white min-h-[56px] font-bold hover:bg-blue-700 transition-colors rounded-full <?php echo $args['classes']?> ">
  <?php echo $args['text'] ?>
</a>
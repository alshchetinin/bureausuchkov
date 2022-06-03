<?php
$args = wp_parse_args(
  $args,
  array(
    'title' => '',
    'description' => '',
    'icon' => ''
  )
);
?>
<div class="transition-colors rounded rfs:p-6 bg-stone-50 group hover:bg-slate-800 hover:text-white">
  <img class=" rfs:w-44 rfs:h-44" src="<?php echo $args['icon'] ?>" alt="">
  <div class="">
    <h3 class="mb-2 font-bold rfs:text-xl"><?php echo $args['title'] ?></h3>
    <p class="opacity-50 "><?php echo $args['description'] ?></p>
  </div>
</div>
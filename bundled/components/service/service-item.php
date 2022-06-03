<?php
$args = wp_parse_args(
  $args,
  array(
    'gradient' => '',
    'title' => '',
    'text' => '',
    'icon' => '',
    'link' => '',
    'gradient' => ''
  )
);
?>


<a href="<?php echo $args['link'] ?>" class="relative flex flex-col justify-between transition-transform transform border rounded-md border-theme-dark-gray group">

  <div class="grid grid-cols-3 gap-x-3">
    <div class="col-span-2 p-6">
      <div class="mb-4 text-2xl font-bold font-heading">
        <?php echo $args['title'] ?>
      </div>
      <div class="mb-8 font-sans text-sm font-light">
        <?php echo $args['text'] ?>
      </div>
    </div>
    <div class="grid col-span-1 grid-rows-2 gap-x-3">
      <div class=""></div>
      <img class="w-full h-auto transition-transform ease-in-out transform group-hover:-translate-y-1" src="<?php echo $args['icon'] ?>" alt="">
    </div>
  </div>


</a>
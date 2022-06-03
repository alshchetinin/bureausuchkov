<div class="space-y-14">
  <div class="">
    <?php get_template_part('./components/title/title', 'section', ['title' => get_field('headline')]) ?>
  </div>
  <div class="space-y-14">
  <?php while (have_rows('items')) : the_row();
    $headline_1 = get_sub_field('headline_1');
    $text_1 = get_sub_field('text_1');
    $headline_2 = get_sub_field('headline_2');
    $text_2 = get_sub_field('text_2');
    $picture = get_sub_field('picture');
  ?>
    <div class="space-y-8 ">
      <div class="">
        <h3 class="mb-4 text-xl font-bold leading-none md:text-2xl lg:w-5/6 xl:text-3xl font-heading"><?php echo $headline_1 ?></h3>
        <p class="text-base leading-snug lg:w-4/6 xl:text-xl"><?php echo $text_1 ?></p>
      </div>
      <div class="">
        <h3 class="mb-4 text-xl font-bold leading-none md:text-2xl lg:w-5/6 xl:text-3xl font-heading"><?php echo $headline_2 ?></h3>
        <p class="text-base leading-snug lg:w-4/6 xl:text-xl"><?php echo $text_2 ?></p>
        <div class="">
          <img class="" src="<?php echo esc_url($picture['url']); ?>" alt="<?php echo esc_attr($picture['alt']); ?>" />
        </div>
      </div>
    </div>
  <?php endwhile; ?>
  </div>

</div>

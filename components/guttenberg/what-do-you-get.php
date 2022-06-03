<div class="space-y-6 ">
  <?php get_template_part('./components/title/title', 'section', ['title' => get_field('title')]) ?>
  <div class="text-2xl leading-none lg:text-3xl font-bold font-heading text-gradient <?php the_field('gradient', get_the_ID()) ?>"><?php the_field('subtitle') ?></div>  
  <p class="text-xl mb-7"><?php the_field('description') ?></p>
  <h3 class="text-3xl font-bold font-heading "><?php the_field('h3title') ?></h3>
  <?php
  $countItem = count(get_field('tekst_v_kolonkah'));
  $className = "md:grid-cols-2";
  if ($countItem > 3) {
    $className = "md:grid-cols-2";
  } else {
    $className = "md:grid-cols-3";
  }

  ?>
  <div class="grid grid-cols-1 <?php echo $className ?> gap-x-5 gap-y-8">
    <?php while (have_rows('tekst_v_kolonkah')) : the_row();

      // переменные
      $headline = get_sub_field('list_title');
      $text = get_sub_field('list_text');
    ?>
      <div class="">
        <h3 class="mb-4 text-xl font-semibold leading-none md:text-2xl font-heading" ><?php echo $headline ?></h3>
        <div class="lg:w-4/5 ">
          <?php echo $text ?>
        </div>

      </div>
    <?php endwhile; ?>

  </div>
</div>

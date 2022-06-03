<?php get_header(); ?>





<section class=" mt-28">
  <div class="container px-4 mx-auto">
    <div class="relative grid gap-3 overflow-hidden rounded-lg md:grid-cols-2 xl:max-w-full group" style="background-color: <?php echo get_field('bg-color') ?>; color: <?php echo get_field('color') ?>">

    <div class="flex flex-col justify-between order-2 p-6 md:order-1">
        <div class="flex mb-5 space-x-1">
          <?php get_template_part('./components/tag/tag', '', ['name' => get_the_date('j F Y')]) ?>
        </div>
        <div class="">
          <h1 class="mb-3 text-2xl font-semibold leading-tight lg:text-3xl"><?php echo get_the_title() ?></h1>
          <h3 class="text-base lg:text-lg font-text"><?php the_excerpt() ?></h3>
        </div>

      </div>
      <?php if(get_field('img')) :  ?> 
      <img class="order-1 md:order-2" src="<?php echo get_field('img') ?>" alt="" class="w-full h-auto">

      <?php endif?>
    </div>
  </div>
</section>




<section class="post-content">
  <div class="container px-4 mx-auto space-y-24 text-theme-dark-gray">
    <div class=""></div>

    <?php the_post();
    the_content(); ?>

    <div class=""></div>
  </div>
</section>
<?php get_footer(); ?>
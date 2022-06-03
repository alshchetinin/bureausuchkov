<div class="grid md:grid-cols-3 gap-x-5 gap-y-5">
  <div class="md:col-span-1 <?php the_field('gradient', get_the_ID()) ?> flex flex-col justify-center p-5 rounded-xl">
    <div class="text-3xl font-bold leading-none 2xl:text-4xl font-heading">
      <?php the_field('number') ?>
    </div>
    <div class="text-base font-bold 2xl:text-xl font-heading">
      <?php the_field('description') ?>
    </div>

  </div>
  <h3 class="text-xl font-bold leading-snug md:col-span-2 2xl:text-2xl font-heading">
    <?php the_field('text') ?>
  </h3>
</div>
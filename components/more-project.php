<section class="mb-10">
  <div>
    <div class="grid gap-y-10">
      <h3 class="font-black leading-none rfs:text-2xl text-theme-dark-gray">Посмотрите <br>другие работы</h3>
      <div class="grid xl:grid-cols-7 gap-x-5 gap-y-5">

      
        <?php $args = array(
          'post_type' => 'project',
          'canetory_name' => get_the_category(),
          'posts_per_page' => 3,
          'orderby' => 'date',
          'offset' => 1
        );
        $property = new WP_Query($args);
        if ($property->have_posts()) : ?>
          <?php while ($property->have_posts()) :
            $property->the_post(); ?>
            <?php $url = get_field('kartinka');
            $darktext = get_field('dark-text');
            $darkclass = '';
            if ($darktext) {
              $darkclass = 'text-slate-800';
            } else {
              $darkclass = 'text-white';
            }
            ?>
            <a href="<?php the_permalink() ?>" class="<?php echo $darkclass ?> flex flex-col justify-between p-4 transition-transform transform bg-no-repeat bg-cover xl:col-span-2 rounded-xl h-80 hover:-translate-y-1" style="background-image: url(<?php echo $url ?>)">

              <div class="text-lg font-bold ">
                <?php the_field('zagolovok') ?>
              </div>
              <div class="">
                <h3 class="font-bold rfs:text-xl font-heading"><?php the_field('czifra_dlya_faktoida') ?></h3>
                <p class="rfs:text-base"><?php the_field('tekst_dlya_faktoida') ?></p>
              </div>

            </a>
          <?php endwhile; ?>
        <?php endif;
        wp_reset_postdata();
        ?>

        <a href="/project" class="flex flex-col-reverse p-4 text-white transition-transform transform bg-blue-500 xl:col-span-1 bg-gradient-btn rounded-xl hover:-translate-y-1">
          <h4 class="font-bold text-center rfs:text-lg lg:text-left">Посмотреть все проекты</h4>
        </a>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container px-4 mx-auto">
    <div class="flex flex-col space-y-10">
      <div class="col-span-full">
        <?php get_template_part('./components/title/title', 'section', ['title' => 'Работаем с компаниями, которые разделяют наши ценности. Помогаем им меняться, адаптироваться и оставаться на&nbsp;шаг впереди']) ?>
      </div>
      <div class="flex flex-wrap justify-between 2xl:flex-nowrap">
        <?php
        $args = array(
          'post_type' => 'services',
          'posts_per_page' => 6,
          'orderby' => 'date',
          'order' => 'ASC',
        );
        $myposts = get_posts($args);
        foreach ($myposts as $post) {
        ?>
          <a class="text-xl md:text-2xl font-bold text-gradient flex-shrink-0 mr-3 lg:mr-0 <?php the_field('gradient') ?> font-heading " href="<?php the_permalink() ?>" class=""><?php the_title() ?></a>
        <?php
        }
        wp_reset_postdata();
        ?>
      </div>

    </div>
  </div>
</section>
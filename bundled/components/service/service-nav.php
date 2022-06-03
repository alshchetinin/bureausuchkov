<div class="grid justify-between grid-cols-3 gap-y-4 md:flex">

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
    <?php get_template_part('./components/service/service-nav', 'item', [
      'title' => get_field('title'),      
      'link' => get_permalink(),      
      ]);?>
  <?php
  }
  wp_reset_postdata();
  ?>

</div>
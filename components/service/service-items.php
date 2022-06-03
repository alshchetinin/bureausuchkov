
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

<?php get_template_part('./components/service/service', 'item', [
  'title' => get_field('title'),
  'text' => get_field('description'),
  'link' => get_permalink(),
  'icon' => get_field('icon'),
  'gradient' => get_field('gradient')
]) ?>
  <?php
  }
  wp_reset_postdata();
  ?>


<div class="space-y-10">
  <?php get_template_part('./components/title/title', 'section', ['title' => get_field('headline'), 'classes' => 'text-gradient ' . get_field('gradient', get_the_ID())]) ?>

  <?php if (get_field('button_link')) { ?>
    <?php get_template_part('./components/button/button', '', ['title' => get_field('button_text',), 'link' => get_field('button_link'), 'size' => 'xl']) ?>
  <?php } ?>
</div>
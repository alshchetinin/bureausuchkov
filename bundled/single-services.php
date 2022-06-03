<?php get_header(); ?>
<div class="space-y-20 lg:space-y-32">
  <?php get_template_part('./components/service/service-page', 'hero', []) ?>

  <section>
    <div>
      <div class="space-y-32 ">
        
          <?php the_post();
          the_content(); ?>
        
      </div>
    </div>
  </section>
  <?php get_template_part('./components/clinet/', '', []) ?>
  <?php get_template_part('./components/quote/quote', '', []) ?>
  <?php get_template_part('./components/forms/forms', 'service', []) ?>

  <section>
    <div class="container px-4 mx-auto">
      <div class="mb-6 lg:w-3/5">
        <?php get_template_part('./components/title/title', 'section', ['title' => 'Услуги, которые вам понравятся']) ?>
      </div>
      <div class="grid md:grid-cols-1 lg:grid-cols-3 xl:grid-cols-3 gap-x-1 gap-y-1">
        <?php get_template_part('./components/service/service', 'items', []) ?>
      </div>
    </div>
  </section>

  <div class=""></div>
</div>
<?php

if (get_field('useBanner')) {

  get_template_part('./components/banner/banner', '', [
    'bannerDesktop' => get_field('bannerDesktop'),
    'bannerMobile' => get_field('bannerMobile'),
    'bannerLink' => get_field('bannerLink'),
  ]);
}
?>
<?php get_footer(); ?>
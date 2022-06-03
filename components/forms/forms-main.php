<section>
  <div class="container px-4 mx-auto">
    <div class="grid items-center p-6 gap-y-5 xl:grid-flow-col bg-theme-dark-gray rounded-2xl gap-x-5">
      <h4 class="text-2xl font-bold leading-none font-heading">
        <?php the_field('main-form-title', 'option') ?>
      </h4>
      <div class="">
        <?php echo do_shortcode(get_field('main-form', 'option')) ?>      
      </div>
      <div class="flex items-center space-x-4">
      <img src="<?php the_field('footer-from-picture', 'option') ?>" alt="" class="w-20 h-20 rounded-full">
        <div class="">
        <a class="block font-heading" href="mailto:<?php the_field('footer-from-mail', 'option') ?>"><?php the_field('footer-from-mail', 'option') ?></a>
              <a class="block text-xl font-bold font-heading" href="tel:<?php the_field('footer-from-phone', 'option') ?>"><?php the_field('footer-from-phone', 'option') ?></a>
        </div>
      </div>
    </div>
  </div>
</section>
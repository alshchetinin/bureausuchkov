<div class="sticky p-6 overflow-hidden top-20 bg-theme-dark-gray rounded-2xl">
  <div class="relative z-10 space-y-5">
    <h4 class="text-xl font-bold leading-tight 2xl:text-2xl font-heading"><?php the_field('big-form-headine') ?></h4>
    <div class="relative flex items-center">
      <img src="<?php the_field('footer-from-picture', 'option') ?>" alt="" class="mr-4 rounded-full w-14 2xl:w-20 h-14 2xl:h-20">
      <div>
        <a href="tel:<?php the_field('footer-from-phone', 'option') ?>" class="block text-xl font-bold leading-none font-heading"><?php the_field('footer-from-phone', 'option') ?> </a>
        <a href="mailto:<?php the_field('footer-from-mail', 'option') ?>" class="block font-heading"><?php the_field('footer-from-mail', 'option') ?></a>

      </div>
      <div class="absolute top-0 left-0 rounded-full -z-10 <?php the_field('gradient') ?> w-96 h-96  opacity-10 svg-blur animate-pulse"></div>
      <div class="absolute bottom-0 right-0 rounded-full -z-10 <?php the_field('gradient') ?> w-96 h-96  opacity-10 svg-blur animate-pulse"></div>
    </div>

    <?php echo do_shortcode(get_field('sticky-form')) ?>
    <p class="text-xs text-center opacity-50 ">Нажимая на кнопку, я соглашаюсь с политикой конфиденциальности</p>
  </div>


</div>
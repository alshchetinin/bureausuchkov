<?php
$args = wp_parse_args(
  $args,
  array(
    'title' => 'Рассказываем, как снизить стоимость лида  на 30% за месяц',
  )
);
?>

<section>
    <div class="grid p-4 border lg:grid-cols-12 rounded-xl text-theme-black xl:gap-x-5">
      <div class="flex flex-col items-center lg:col-span-7 lg:flex-row">
        <img src="<?php echo get_template_directory_uri() ?>/dist/images/mail-front-gradient.png" class="w-20 h-20 mr-3 rounded-full" alt="">
        <p class="text-xl font-semibold text-center lg:text-left"><?php echo $args['title'] ?></p>
      </div>
      <div class="lg:col-span-5 inline-form">
        <div class="mb-2">
        <?php echo do_shortcode('[contact-form-7 id="27" title="subscription form"]') ?>
        </div>
        
        <p class="text-xs opacity-50">Нажимая на кнопку, я соглашаюсь с политикой конфиденциальности</p>
      </div>
    </div>
</section>
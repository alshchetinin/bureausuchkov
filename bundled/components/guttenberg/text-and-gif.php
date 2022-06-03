<div class="">
  <div class="mb-10">
    <?php get_template_part('./components/title/title', 'section', ['title' => get_field('zagolovok_bloka'), 'classes' => 'text-gradient ' . get_field('gradient', get_the_ID())]) ?>
  </div>
  
  <?php while (have_rows('items')) : the_row();

    // переменные
    $teg = get_sub_field('teg');
    $headlines = get_sub_field('headlines');
    $text = get_sub_field('text');
    $gifka = get_sub_field('gifka');
  ?>
    <div class="grid mb-20 lg:grid-cols-5 gap-x-5 group">
      <div class="col-span-3 space-y-4">
        <div class="space-x-4 text-base lg:flex lg:text-xl lg:items-center font-heading">
          <div class="inline-block px-5 py-2 leading-none bg-theme-dark-gray rounded-xl">
            <?php echo $teg ?>
          </div>
          <div class="">
            <?php echo $headlines ?>
          </div>

        </div>
        <div class="w-4/5 text-xl font-semibold leading-tight">
          <p><?php echo $text ?></p>
        </div>
      </div>
      <div class="relative hidden transition-transform duration-500 ease-in-out scale-0 lg:col-span-2 lg:block transform-gpu -translate-y-80 translate-x-80 group-hover:scale-100 group-hover:translate-x-0 group-hover:-translate-y-0">        
        <img class="absolute top-0 right-0 w-full h-auto " src="<?php echo $gifka ?>" alt="">
      </div>
    </div>


  <?php endwhile; ?>
</div>

<!-- <?php $post_id = get_the_ID() ?>
<section class="g-block">
  <div class="wrapper">
    <div class="row">
      <div class="text-and-gif">
        <div class="text-and-gif__header">
          <h2 class="font-gigant" style="background-image: linear-gradient(<?php the_field('gradient', $post_id) ?>);"><?php the_field('zagolovok_bloka',) ?> </h2>
        </div>
        <div class="text-and-gif__items">


          <?php while (have_rows('items')) : the_row();

            // переменные
            $teg = get_sub_field('teg');
            $headlines = get_sub_field('headlines');
            $text = get_sub_field('text');
            $gifka = get_sub_field('gifka');
          ?>
            <div class="text-and-gif-item">
              <div class="text-and-gif-item__text">
                <div class="text-and-gif-item__top">
                  <div class="text-and-gif-item__tag">
                    <?php echo $teg ?>
                  </div>
                  <div class="text-and-gif-item__headline">
                    <?php echo $headlines ?>
                  </div>

                </div>
                <div class="text-and-gif-item__bottom">
                  <p><?php echo $text ?></p>
                </div>
              </div>
              <div class="text-and-gif-item__gif">
                <img class="img-responsive img-width" src="<?php echo $gifka ?>" alt="">
              </div>
            </div>


          <?php endwhile; ?>
        </div>



      </div>
    </div>



  </div>


</section> -->
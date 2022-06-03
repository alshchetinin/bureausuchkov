<section>
   <div class="container px-4 mx-auto">
      <div class="">
         <div class="space-y-8 ">
            <?php get_template_part('./components/title/title', 'section', ['title' => get_field('quote-text'), 'classes' => 'text-gradient ' . get_field('gradient', get_the_ID())  ])?>
            <div class="flex items-center space-x-4">
               <img class="w-24 h-24" src="<?php the_field('quote-picture') ?>" alt="">
               <div class="text-base font-bold lg:text-xl font-heading">
                  <p><?php the_field('quote-name') ?></p>
                  <p><?php the_field('quote-job') ?></p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>




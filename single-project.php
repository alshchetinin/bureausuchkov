<?php get_header(); ?>


<section>
  <div >
    <div class="grid grid-cols-1 mb-8 lg:grid-cols-12 gap-x-5 gap-y-5 ">
      <h3 class="font-bold leading-tight rfs:text-xl font-heading col-span-full"><?php echo get_field('klient') ?></h3>
      <div class="col-span-12">        
        <h1 class="font-black leading-none rfs:text-3xl font-heading"><?php the_title() ?></h1>
      </div>
      <div class="col-span-12">
        <h3 class="text-lg font-bold xl:text-xl font-heading"><?php the_excerpt() ?></h3>
      </div>
    </div>
  </div>
  <div class="w-full mb-8 bg-no-repeat bg-cover aspect-w-16 aspect-h-6" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) ?>)">

  </div>
</section>

<section>
  <div class="space-y-24">
  <div class=""></div>

  <?php the_post();
  the_content(); ?>
  
  <div class=""></div>
  </div>
</section>
<?php get_template_part('./components/more-project', '', [])?>

<?php get_footer(); ?>
<?php
/*
Template Name: Страница проектов (новая)
Template Post Type: page
*/
?>
<?php get_header(); ?>



<section>
  <div>
    
      <?php get_template_part('./components/title', '', ['title' => get_the_title()]) ?>
    
    <div class="flex mb-6 space-x-4 overflow-hidden overflow-x-scroll fillter">
      <?php

      $args = array(
        'hide_empty' => true,
        'post_types' => 'project',
        'orderby' => 'id',
      );

      // $terms = post_get_terms('category', $args);
      // print_r($terms);
      $terms_product_cat = post_get_terms('category', $args);      

      // $terms_product_cat = get_terms(array(
      //   'post_type' => 'product',
      //   'hide_empty' => true,
      //   'orderby' => 'id',
      //   'taxonomy' => 'category'
      // ))

      ?>

      <?php foreach ($terms_product_cat as $key => $product_cat) { ?>
      <a class=" bg-stone-100 rfs:text-lg py-2 px-6 rounded-xl fillter_item transition-opacity hover:opacity-100 <?php if ($key == 0) echo 'fillter_active'; ?>"
        href="#<?php echo $product_cat->slug; ?>"
        data-tab="<?php echo $product_cat->slug; ?>"><?php echo $product_cat->name; ?></a>
      <?php } ?>

    </div>
    <div class=""></div>
  </div>
</section>

<section class="mb-10">

  <?php foreach ($terms_product_cat as $key => $product_cat) { ?>
  <div
    class=" project_content_tab  grid-cols-1 md:grid-cols-2 xl:grid-cols-4 2xl:grid-cols-5 gap-2 lg:gap-5 project_content_tab projects <?php if ($key == 0) echo 'project_content_tab-active'; ?>"
    id="<?php echo $product_cat->slug; ?>" data-tab="<?php echo $product_cat->slug; ?>">
    <?php
      $mypost = array('post_type' => 'project', 'numberposts' => -1, 'category' => $product_cat->term_id);
      $products = get_posts($mypost);
      ?>
    <?php foreach ($products as $post) {
        setup_postdata($post);
        $url = get_field('kartinka');
        $category = get_the_category();
        $darktext = get_field('dark-text');
        $darkclass = '';
        if ($darktext) {
         $darkclass = 'text-slate-800';
       } else {
         $darkclass = 'text-white';
       }
        $videoCover = get_field('videoCover');
        $coverNew = get_field('coverNew');
        
        get_template_part('./components/card/card', 'project', [
          'link' => get_the_permalink(),
          'darkClass'=> $darkclass,
          'cover' => $coverNew,
          'videoCover' => $videoCover,
          'title' => get_the_title(),
          'client' => get_field('klient'),
          'animation' => false
        ]);
      }
      wp_reset_postdata(); ?>
  </div>
  <?php } ?>

</section>


<?php get_footer(); ?>
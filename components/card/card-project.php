<?php
$args = wp_parse_args(
  $args,
  array(
    'link' => '',
    'darkClass'=>'',
    'cover' => '',
    'videoCover' => '',
    'title' => '',
    'client' => '',
    'animation' => false,
    'classes' => '' 
  )
);
?>


    <a href="<?php echo $args['link'] ?>"
      class="<?php echo $args['darkClass']?> <? echo $args['classes'] ?> <?php echo $ani = $args['animation'] ? 'js-project-animation-main' : '' ?> relative  flex flex-col justify-between flex-shrink-0  overflow-hidden rounded-2xl lg:max-w-full group transform transition-transform hover:-translate-y-1  " >    
      <?php if($args['videoCover']) : ?>
      <video class="h-full min-w-full " autoplay="true" loop="true" muted="true" poster="<?php echo wp_get_attachment_url($args['cover']) ?>">
        <source src="<?php echo $args['videoCover'] ?>" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
      </video>      
      <?php endif; ?>
      <?php 
      if( $args['cover'] && !$args['videoCover'] ) {
        echo wp_get_attachment_image( $args['cover'], 'full' ); 
      }
      ?>
        <div class="absolute transition-opacity opacity-0 right-3 top-3 group-hover:opacity-100">
          <svg class="w-6 h-6" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="27" height="27" rx="4" fill="white" />
            <path
              d="M10.1765 19L9 17.7059L16.0588 9.94118L11.3529 9.94118L10.7647 8L19 8V17.0588L17.2353 16.4118L17.2353 11.2353L10.1765 19Z"
              fill="black" />
          </svg>
        </div>      

      <div class="absolute z-20 w-full rfs:p-6 bottom-2 ">
        <div class="flex mb-1 space-x-1 lg:mb-5">
          <?php get_template_part('./components/tag/tag', '', ['name' => $args['client']]) ?>
        </div>
        <h3 class="font-semibold rsf:text-base xl:rfs:text-lg"><?php echo $args['title'] ?></h3>

      </div>
    </a>
    
<section>
<?php get_template_part('./components/title', '', ['title'=> 'Последние проекты'])?>
    
    <div class="overflow-x-auto lg:overflow-x-visible">
    <div class="flex lg:grid lg:grid-cols-5 rfs:gap-x-4 gap-y-4">
      <?
      $my_posts = get_posts(array(
        'numberposts' => 4,
        'orderby' => 'date',        
        'post_type'   => 'project',
        
      ));
      foreach ($my_posts as $post) {
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
          'animation' => true,
          'classes' => 'max-w-xs'
        ]);
      }
      wp_reset_postdata(); // сброс

      ?>               
      <a href="/project" class="flex flex-col-reverse flex-shrink-0 w-full max-w-xs text-white bg-blue-600 rfs:px-10 rfs:py-6 lg:max-w-full rounded-2xl text-theme-white group js-project-animation-main">
        <h3 class="flex items-center space-x-3 font-semibold rfs:text-lg">
          <span>Смотреть все</span>
          <svg class="w-6 h-6 transition-opacity opacity-0 group-hover:opacity-100" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect width="27" height="27" rx="4" fill="white" />
              <path
                d="M10.1765 19L9 17.7059L16.0588 9.94118L11.3529 9.94118L10.7647 8L19 8V17.0588L17.2353 16.4118L17.2353 11.2353L10.1765 19Z"
                fill="black" />
            </svg></h3> 
      </a>
    </div>
    </div>
    </section>
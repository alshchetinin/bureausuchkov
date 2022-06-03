<div class="">
  <div class="mb-10">
    <?php get_template_part('./components/title/title', 'section', ['title' => get_field('zagolovok_bloka',)]) ?>
  </div>
  <div class="">
    <?php 
    $i = 1;
    while (have_rows('steps',)) : the_row();
      $headline = get_sub_field('zagolovok');
      $text = get_sub_field('text');
      $rowCount = count( get_field('steps'));
      $line = '';
      
      $i++;
      
      if($i <= $rowCount) {
        $line = 'block';
      }
      // print_r($i);

      get_template_part('./components/steps/steps', 'item', ['title'=> $headline, 'text' => $text, 'line' => $line]);
    endwhile; ?>
  </div>
</div>




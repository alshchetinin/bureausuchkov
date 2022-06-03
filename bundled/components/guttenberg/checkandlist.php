<div class="">
  <div class="">
  <div class="mb-10">
  <?php get_template_part('./components/title/title', 'section', ['title' => get_field('zagolovok')]) ?>
  </div>
  
    <div class="grid lg:grid-cols-2 gap-x-5 gap-y-12">
      <?php while (have_rows('spisok')) : the_row();

        // переменные
        $list_title = get_sub_field('list_title');
        $list_text = get_sub_field('list_text');
      ?>
        <!-- begin list-item -->
        <div class="relative">
          <div class="">
            <svg class="fill-current w-11 h-11" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M23.125 3C12.0113 3 3 12.0113 3 23.125C3 34.2387 12.0113 43.25 23.125 43.25C34.2387 43.25 43.25 34.2387 43.25 23.125C43.25 12.0113 34.2387 3 23.125 3ZM31.8174 16.5529L22.3568 29.6701C22.2246 29.8547 22.0503 30.0051 21.8484 30.1088C21.6464 30.2125 21.4226 30.2666 21.1956 30.2666C20.9686 30.2666 20.7448 30.2125 20.5429 30.1088C20.3409 30.0051 20.1666 29.8547 20.0344 29.6701L14.4326 21.9076C14.2619 21.6695 14.4326 21.3371 14.7246 21.3371H16.8314C17.2896 21.3371 17.7254 21.5572 17.9949 21.9346L21.1934 26.3729L28.2551 16.5799C28.5246 16.207 28.9559 15.9824 29.4186 15.9824H31.5254C31.8174 15.9824 31.9881 16.3148 31.8174 16.5529Z" fill="white" />
            </svg>
          </div>
          <div class="">
            <div class="mb-8 text-xl font-bold leading-tight lg:text-3xl font-heading">
              <?php echo $list_title ?>
            </div>

            <div class="lg:w-4/5">
              <?php echo $list_text ?>
            </div>
          </div>
        </div>
        <!-- end list-item -->
      <?php endwhile; ?>
    </div>
  </div>
</div>
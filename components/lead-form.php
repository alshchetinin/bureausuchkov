<div class="min-h-[350px] text-white bg-slate-800 rounded flex lg:flex-row  flex-col-reverse items-center">
  <div class="lg:min-w-[33%]  h-full bg-slate-200 bg-cover bg-center" style="background-image: url(<?php echo get_template_directory_uri() ?>/dist/img/s.png)">
   <img class="object-cover" src="<?php echo get_template_directory_uri() ?>/dist/img/s.png" alt="">
  </div>
  <div class="rfs:p-10">
  <?php get_template_part('./components/title', '', ['title'=> 'Начните получать качественых целыевых лидов прямо сейчас'])?>
  <p class="opacity-50 max-w-[650px] mb-5 rfs:text-base">Приводим целевых клиентов и повышаем прибыль компаний с помощью комплекса диджитал-инструментов. Работаем с финансовой привязкой к результату</p>
  <div class="flex flex-col justify-between space-y-3 text-center lg:items-center lg:flex-row">
   <?php get_template_part('./components/button', '', ['title'=> 'Оставить заявку'])?>
   <a class="font-bold rfs:text-xl" href="#">+7 999 999 99 99</a>
   <a class="font-bold rfs:text-xl" href="#">a@bureausuchkov.com</a>
  </div>
  </div>
</div>
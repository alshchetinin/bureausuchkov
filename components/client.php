<section class="py-24 text-center text-white bg-slate-800"> 
<?php get_template_part('./components/title', '', ['title'=> 'Нам доверяют 100+ клиентов'])?>
<div class="flex flex-wrap justify-center mt-5 space-x-5 gap-y-4 rfs:px-12">
<?php while (have_rows('blok_nam_doveryayut', 'option')) : the_row();        
        $logo = get_sub_field('logo');
        $link = get_sub_field('ssylka_na_sajt_klienta');
        $text = get_sub_field('tekst');
        ?> 
        <img class="object-contain w-full h-auto basis-10 lg:basis-24" src="<?php echo $logo['url'] ?>" alt="">        
      <?php endwhile; ?>
</div>
</section>
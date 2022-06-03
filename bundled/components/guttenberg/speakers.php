<div>
  <?php get_template_part('./components/guttenberg/title-text-item', '', []) ?>
  <div class="grid gap-5 lg:grid-cols-4">
    <?php while (have_rows('member-team',)) : the_row();

      $name = get_sub_field('name');
      $email = get_sub_field('email');
      $position = get_sub_field('position');
      $tg = get_sub_field('tg');
      $vk = get_sub_field('vk');
      $inst = get_sub_field('inst');
      $fb = get_sub_field('fb');
      $photo = get_sub_field('photo');
    ?>
      <div class="col-span-full xl:col-span-1">
        <?php get_template_part('./components/team/team', 'item', [
          'photo' => $photo,
          'name' => $name,
          'email' => $email,
          'position' => $position,
          'tg' => $tg,
          'vk' => $vk,
          'inst' => $inst,
          'fb' => $fb,
        ]) ?>

      </div>
    <?php endwhile; ?>
  </div>
</div>
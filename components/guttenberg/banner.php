<?php
$args = wp_parse_args(
  $args,
  array(
    'bannerDesktop' => get_field('bannerDesktop'),
    'bannerMobile' => get_field('bannerMobile'),
    'bannerLink' => get_field('link'),
    'linkorPopup' => get_field('linkPopup'),
    'popup' => get_field('popup'),
  )
);
$link = '';

if($args['linkorPopup'] == 'link') {
  $link = $args['bannerLink'] ; 
} else {
  $link = '#';
}

$popup = '';
if($args['linkorPopup'] == 'popup') {
  $popup = $args['popup'] ; 
} else {
  $popup = '';
}

?>





<a href="<?php echo $link ?>" target="_blank" class="block <?php echo $popup ?>">
  <picture>
    <source media="(max-width: 720px)" srcset="<?php echo $args['bannerMobile'] ?>">
    <source media="(min-width: 721px)" srcset="<?php echo $args['bannerDesktop'] ?>">
    <img src="<?php echo $args['bannerDesktop'] ?>" alt="Chris standing up holding his daughter Elva">
  </picture>
</a>
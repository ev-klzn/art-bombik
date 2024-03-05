<!DOCTYPE html>
<html lang="uk">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta
      name="description"
      content="Арт-простір Бомбік - це волонтерське об'єднання небайдужих людей. Ми не тільки шахтарське, але й творче місто! Наближаємо перемогу разом, навіть відпочиваючи!">
    <title>Арт-простір "Бомбік" Кривий Ріг - офіційна сторінка</title>
    <link rel="shortcut icon" href="<?php echo bloginfo('template_url', 2);?>/favicon.ico" type="image/x-icon">
	 <?php 
      wp_head();
	 ?>
  </head>

  <body>
    <div class="wrapper">
      <header class="header">
        <div class="header__container container">
          <a href="http://localhost/art-bombik/" class="header__logo"><?php the_field ('company_title', 2);?></a>
          <nav class="header__menu menu">

            <?php 
                wp_nav_menu( [
                  'menu'            => 'Main',
                  'container'       => 'false',
                  // 'container_class' => '',
                  // 'container_id'    => '',
                  'menu_class'      => 'menu__list',
                  // 'menu_id'         => '',
                  'echo'            => true,
                  'fallback_cb'     => 'wp_page_menu',
                  // 'before'          => '',
                  // 'after'           => '',
                  // 'link_before'     => '',
                  // 'link_after'      => '',
                  'items_wrap'      => '<ul class="menu__list">%3$s</ul>',
                  'depth'           => 0,
                  'walker'          => '',
                ] );
            ?>

          </nav>
        </div>
      </header>
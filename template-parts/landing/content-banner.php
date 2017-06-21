<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Molnium
 */

?>

<!-- BANNER -->
    <section id="banner">
      <div class="container">
    <!-- MENU -->
        <nav class="main-menu clearfix">
          <i id="mobilemenu" class="fa fa-bars"></i>
          <div class="mobilemenushow" style="display: none;"></div>
          <?php wp_nav_menu( array(
                  'theme_location' => 'menu-1',
                  'menu_id'        => 'headermenu',
                ) ); ?>
          
        </nav>

    <!-- CONTENT -->
        <div class="content-wrapper fl-right">
          <div class="text-block">
            <h1>РАЗВИТИЕ БИЗНЕСА ПО АМЕРИКАНСКИМ ТЕХНОЛОГИЯМ</h1>
            <div class="stars">
              <img src="<?php echo ( get_template_directory_uri() . '/img/banner-star.png' ); ?>" alt="star">
              <img src="<?php echo ( get_template_directory_uri() . '/img/banner-star.png' ); ?>" alt="star">
              <img src="<?php echo ( get_template_directory_uri() . '/img/banner-star.png' ); ?>" alt="star">
            </div>
            <img src="<?php echo ( get_template_directory_uri() . '/img/banner-men.png' ); ?>" alt="Molnium" class="banner_img wbh_mobile">
            <p>Наши решения увеличивают прибыль на 30 - 370 % за 2 месяца и позволяют выйти из конкурентной войны победителем</p>
          </div>
          <div class="form">
            <p>Получите рекоммендации по увеличению прибыли на бесплатной консультации</p>
            <form action="" id="bannerForm">
              <input type="name" name="name" placeholder="ИМЯ">
              <input type="email" email="email" placeholder="E-MAIL">
              <button class="btn ttu">Записаться</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <div class="banner-divider"></div>

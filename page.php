<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Molnium
 */

get_header(); ?>

<!-- BANNER -->
    <section id="banner" class="banner-post">
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

    <!-- BANNER CONTENT -->
        <div class="content-wrapper fl-right">
          <div class="text-block">
			
		<?php if ( $banner_title = get_field('banner-title') ) : ?>
			<h1><?php echo $banner_title; ?></h1>
		<?php else : ?>
			<h1>РАЗВИТИЕ БИЗНЕСА ПО АМЕРИКАНСКИМ ТЕХНОЛОГИЯМ</h1>
		<?php endif; ?>            
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

            <?php 
              echo do_shortcode( '[contact-form-7 id="17" title="Форма Баннера"]' ); 
            ?>

          </div>
        </div>
      </div>
    </section>

<!--CONTENT -->
	<div class="container w_sidebar">

		<div id="primary" class="content-area">
			<div class="breadcrumb"><a href="/">Главная</a> > <span><?php the_title() ?></span></div>
			<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.
			?>

			</main><!-- #main -->
			<section id="single_after_content">
				<div class="utp">
					<p class="desc">Создайте ажиотаж вокруг Вашего бизнеса</p>
					<p class="main">Закажите разработку УТП прямо сейчас</p>
					<button class="btn popmake-blog-zakazat-utp">ЗАКАЗАТЬ</button>
				</div>
				<img src="<?php echo ( get_template_directory_uri() . '/img/single-divider.png' ); ?>" alt="" class="divider">
				<div class="lead">
					<p>Или  развивайте бизнес самостоятельно, обучившись нашим технологиям в “Закрытом клубе предпринимателей”</p>
					<button class="popmake-blog-zakrytyj-klub-predprinimatelej"><img src="<?php echo ( get_template_directory_uri() . '/img/single_lead-btn.png' ); ?>" alt=""></button>
				</div>
			</section>
		</div><!-- #primary -->

		<?php get_sidebar(); ?>
	</div>

<?php
get_footer();

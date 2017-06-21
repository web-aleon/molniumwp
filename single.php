<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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

            <?php 
              echo do_shortcode( '[contact-form-7 id="17" title="Форма Баннера"]' ); 
            ?>

            <!-- <form action="" id="bannerForm">
              <input type="name" name="name" placeholder="ИМЯ">
              <input type="email" email="email" placeholder="E-MAIL">
              <button class="btn ttu">Записаться</button>
            </form> -->
          </div>
        </div>
      </div>
    </section>

	<div class="container">
		<div id="primary" class="content-area w_sidebar">
			<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'post' );

				the_post_navigation();

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

			</main><!-- #main -->
		</div><!-- #primary -->

		<?php get_sidebar(); ?>
	</div><!-- container -->

<?php get_footer(); ?>

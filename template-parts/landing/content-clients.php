<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Molnium
 */

?>
<?php

	$services_sfera = get_field('services_sfera');
	$services_torg = get_field('services_torg');
	$services_selo = get_field('services_selo');
	$services_obshepit = get_field('services_obshepit');
	$services_proizvodstvo = get_field('services_proizvodstvo');

?>
<!-- CLIENTS -->
    <section id="clients">
      <div class="container">
        <h2>КОМУ МЫ ПРИВЛЕКАЕМ КЛИЕНТОВ УЖЕ СЕГОДНЯ</h2>
        <div class="content">
          <div class="item item1">
            <img src="<?php echo ( get_template_directory_uri() . '/img/clients1.png' ); ?>" alt="">
            <h3>Сфера услуг</h3>

            <?php if ( $services_sfera ) : ?>
				<a href="<?php echo $services_sfera; ?>" class="more">подробнее</a>
			<?php else : ?>
				<a href="#" class="more popmake-besplatnaya-konsultatsiya">подробнее</a>
			<?php endif; ?>  

          </div>
          <div class="item item2">
            <img src="<?php echo ( get_template_directory_uri() . '/img/clients2.png' ); ?>" alt="">
            <h3>Розничная и оптовая торговля</h3>

            <?php if ( $services_torg ) : ?>
				<a href="<?php echo $services_torg; ?>" class="more">подробнее</a>
			<?php else : ?>
				<a href="#" class="more popmake-besplatnaya-konsultatsiya">подробнее</a>
			<?php endif; ?>  

          </div>
          <div class="item item3">
            <img src="<?php echo ( get_template_directory_uri() . '/img/clients3.png' ); ?>" alt="">
            <h3>Сельское хозяйство</h3>

            <?php if ( $services_selo ) : ?>
				<a href="<?php echo $services_selo; ?>" class="more">подробнее</a>
			<?php else : ?>
				<a href="#" class="more popmake-besplatnaya-konsultatsiya">подробнее</a>
			<?php endif; ?>  

          </div>
          <div class="item item4">
            <img src="<?php echo ( get_template_directory_uri() . '/img/clients4.png' ); ?>" alt="">
            <h3>Общепит</h3>

            <?php if ( $services_obshepit ) : ?>
				<a href="<?php echo $services_obshepit; ?>" class="more">подробнее</a>
			<?php else : ?>
				<a href="#" class="more popmake-besplatnaya-konsultatsiya">подробнее</a>
			<?php endif; ?>  

          </div>
          <div class="item item5">
            <img src="<?php echo ( get_template_directory_uri() . '/img/clients5.png' ); ?>" alt="">
            <h3>Производство</h3>

            <?php if ( $services_proizvodstvo ) : ?>
				<a href="<?php echo $services_proizvodstvo; ?>" class="more">подробнее</a>
			<?php else : ?>
				<a href="#" class="more popmake-besplatnaya-konsultatsiya">подробнее</a>	
			<?php endif; ?>  

          </div>
          <div class="list">
            <p class="list-title">КАКИМ ОБРАЗОМ УВЕЛИЧИВАЕМ ПРИБЫЛЬ</p>
            <ul>
              <li>Увеличиваем число клиентов</li>
              <li>Увеличиваем средний чек покупки</li>
              <li>Увеличиваем частоту покупки на одного клиента</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <div class="client-divider"></div>
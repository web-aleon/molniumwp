<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Molnium
 */

?>

	</div><!-- #content -->

<!-- FOOTER     -->
    <footer id="footer" role="contentinfo">
      <div class="container">
        <div class="content-top clearfix">
          <div class="col col1">
            <a href="/" class="foot-logo"><img src="<?php echo ( get_template_directory_uri() . '/img/footer-logo.png' ); ?>" alt="Molnium logo"></a>
            <p>Самые современные инструменты для повышения прибыли и эффективности Вашего бизнеса!</p>
          </div>
          <div class="col col2">
            <h3>ОПЫТ, СТАТЬИ, НОВОСТИ</h3>
            <?php 
              echo do_shortcode( '[contact-form-7 id="18" title="Форма в Подвале"]' ); 
            ?>

           <!--  <form action="" id="footForm">
              <input type="text" name="name" placeholder="Имя">
              <input type="email" name="email" placeholder="E-mail">
              <button class="btn ttu">подписаться на РАССЫЛКУ</button>
            </form> -->
          </div>
          <div class="col col3">
            <h3>Контакты</h3>
            <div class="foot-contact-item fc-phone">
              <div class="icon-box"><i class="ph-icon ph-icon-b icon-rotate">v</i></div>
              <div class="contact-info">
                <p><a href="tel:965555">96-55-55</a>, <br><a href="mailto:molnium@gmail.com"><span>Molnium@gmail.com</span></a></p>
              </div>
            </div>
            <div class="foot-contact-item">
              <div class="icon-box"><i class="ph-icon ph-icon-a">a</i></div>
              <div class="contact-info">
                <p>Владикавказ, <br><span>Цоколаева 5</span></p>
              </div>
            </div>
            <div class="foot-contact-item">
              <div class="icon-box"><i class="ph-icon ph-icon-d">c</i></div>
              <div class="contact-info">
                <p>Пн-Пт 9<sup>00</sup> - 19<sup>00</sup>, <br><span>Сб - Вс 10<sup>00</sup> - 15<sup>00</sup></span></p>
              </div>
            </div>
          </div>
        </div>
        <div class="divider"></div>
        <div class="content-bottom clearfix">
          <div class="col col1">
            <div class="social">
              <a href="#"><img src="<?php echo ( get_template_directory_uri() . '/img/footer-insta.png' ); ?>" alt=""></a>
              <a href="#"><img src="<?php echo ( get_template_directory_uri() . '/img/footer-vk.png' ); ?>" alt=""></a>
              <a href="#"><img src="<?php echo ( get_template_directory_uri() . '/img/footer-youtube.png' ); ?>" alt=""></a>
            </div>
            <p class="copyright">Copy Rights ©  2017 “Molnium” All Rights Reserved</p>
          </div>
          <div class="col col2">
            <h3>Последние статьи</h3>
            <ul>
              <li><a href="#">Маркетинговая стратегия с нуля</a></li>
              <li><a href="#">Внеконкурентный бизнес уже завтра</a></li>
              <li><a href="#">Где найти состоятельных клиентов</a></li>
              <li><a href="#">Как найти ценных сотрудников</a></li>
              <li><a href="#">Зачем вести клиентскую базу</a></li>
            </ul>
          </div>
          <div class="col col3">
            <h3>Быстрые ссылки</h3>
            <ul>
              <li><a href="#">Главная</a></li>
              <li><a href="#">О Компании</a></li>
              <li><a href="#">Контакты</a></li>
              <li><a href="#">Блог</a></li>
              <li><a href="#">Карта сайта</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

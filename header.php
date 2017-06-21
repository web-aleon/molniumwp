<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Molnium
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'molnium' ); ?></a>

	<!-- HEADER   -->
    <header id="header" role="banner">
      <div class="container">
        <a href="/" class="logo"><img src="<?php echo ( get_template_directory_uri() . '/img/logo.png' ); ?>" alt="Molnium"></a>
        <div class="header_contact">
          <div class="header_contact-item">
            <i class="ph-icon ph-icon-b icon-rotate">v</i>
            <div class="contact-info">
              <a href="tel:965555" class="info-main">96-55-55</a>
              <a href="mailto:molnium@gmail.com" class="info-secondary">Molnium@gmail.com</a>
            </div>
          </div>
          <div class="header_contact-item">
            <i class="ph-icon ph-icon-a">a</i>
            <div class="contact-info ">
              <p class="info-main">Владикавказ</p>
              <p class="info-secondary">Цоколаева, 5</p>
            </div>
          </div>
          <div class="header_contact-item">
            <i class="ph-icon ph-icon-d">c</i>
            <div class="contact-info">
              <p class="info-main">Пн-Пт 9<sup>00</sup> - 19<sup>00</sup></p>
              <p class="info-secondary">Сб - Вс 10<sup>00</sup> - 15<sup>00</sup></p>
            </div>
          </div>
        </div>
      </div>
    </header>

	<div id="content" class="site-content">

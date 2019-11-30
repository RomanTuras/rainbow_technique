<?php
/**
 * Header file for the Sandra WordPress theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Sandra
 * @since 1.0.0
 */

?><!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="utf-8">
    <!-- <base href="/"> -->

    <title>Радужная техника</title>
    <meta name="Радужная техника" content="Радужная техника - Марафон Сандры Саммер">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />
    
    <!-- Custom Browsers Color Start -->
    <meta name="theme-color" content="#fff">
    <!-- Custom Browsers Color End -->
    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.min.css"></noscript>

    <link rel="preload" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"></noscript>

<!-- Pixel code -->
    <script type="text/javascript">!function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src="https://vk.com/js/api/openapi.js?162",t.onload=function(){VK.Retargeting.Init("VK-RTRG-432091-6PkyF"),VK.Retargeting.Hit()},document.head.appendChild(t)}();</script><noscript><img src="https://vk.com/rtrg?p=VK-RTRG-432091-6PkyF" style="position:fixed; left:-999px;" alt=""/></noscript>
<!-- End Pixel code -->

    <?php wp_head(); ?>

</head>

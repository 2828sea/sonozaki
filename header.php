<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- GoogleFont -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
  <!-- swiper -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <!-- css -->
  <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('./css/styles.css')); ?>">
  <!-- JavaScript -->

  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script defer src="<?php echo esc_url(get_theme_file_uri('./js/script.js')); ?>"></script>
  <?php wp_head(); ?>
</head>
<body <?php body_class('js-body'); ?>>
  <?php wp_body_open(); ?>
  <div class="p-loading">
    <div class="p-loading__area" id="loading_box">
      <div class="p-loading__img"><img class="fadeUp" src="<?php echo get_template_directory_uri(); ?>/images/common/header-logo--white.svg" alt=""></div>
    </div>
  </div>
  <!--/loading-->

  <?php 
  $home = esc_url(home_url('/'));
  $services = esc_url(home_url('/services/'));
  $works = esc_url(home_url('/works/'));
  $about = esc_url(home_url('/about/'));
  $recruit = esc_url(home_url('/recruit/'));
  $contact = esc_url(home_url('/contact/'));
  ?>


  <!-- ヘッダー -->
  <header class="l-header p-header js-header">
    <div class="p-header__inner">
      <h1 class="p-header__title">
        <a href="<?php echo $home ?>" class="p-header__logo p-header__logo--white js-change--white">
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/header-logo--white.svg" alt="">
        </a>
        <a href="<?php echo $home ?>" class="p-header__logo p-header__logo--black js-change--black">
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/header-logo--black.svg" alt="">
        </a>
      </h1>
      <!-- PC用のメニュー(スムーススクロールついてます！) SPでは非表示 -->
      <nav class="p-header__nav u-desktop">
        <ul class="p-header__item">
          <li class="p-header__list"><a href="<?php echo $home ?>">トップ<span>TOP</span></a></li>
          <li class="p-header__list"><a href="<?php echo $services ?>">事業内容<span>SERVICES</span></a></li>
          <li class="p-header__list"><a href="<?php echo $about ?>">園崎組について<span>ABOUT</span></a></li>
          <li class="p-header__list"><a href="<?php echo $works ?>">園崎組の実績<span>WORKS</span></a></li>
          <li class="p-header__list"><a href="<?php echo $recruit ?>">採用情報<span>RECRUIT</span></a></li>
          <li class="p-header__list"><a href="<?php echo $contact ?>">お問い合わせ<span>CONTACT</span></a></li>
        </ul>
      </nav>
      <!-- ここまでPC用のメニュー -->
    </div>

    <!-- スマホサイズでハンバーガーメニュー PCでは非表示-->
    <div class="p-hamburger js-hamburger u-mobile">
      <span></span>
      <span></span>
      <span></span>
    </div>

    <nav class="p-globalMenuSp js-globalMenuSp">
      <ul id="menu">
        <li class="p-globalMenuSp__link">
          <a href="<?php echo $home ?>">トップ<span>TOP</span></a>
        </li>
        <li class="p-globalMenuSp__link">
          <a href="<?php echo $services ?>">事業内容</a>
        </li>
        <li class="p-globalMenuSp__link">
          <a href="<?php echo $about ?>">園崎組について</a>
        </li>
        <li class="p-globalMenuSp__link">
          <a href="<?php echo $works ?>">園崎組の実績</a>
        </li>
        <li class="p-globalMenuSp__link">
          <a href="<?php echo $recruit ?>">採用情報</a>
        </li>
        <li class="p-globalMenuSp__link">
          <a href="<?php echo $contact ?>">お問い合わせ</a>
        </li>
      </ul>
    </nav>
    <!-- ここまでハンバーガーメニュー -->
  </header>
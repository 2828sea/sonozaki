<?php get_header(); ?>

<?php
$home = esc_url(home_url('/'));
$news = esc_url(home_url('/news/'));
$services = esc_url(home_url('/services/'));
$works = esc_url(home_url('/works/'));
$about = esc_url(home_url('/about/'));
$recruit = esc_url(home_url('/recruit/'));
$contact = esc_url(home_url('/contact/'));
?>


<main>
  <div class="l-mv p-mv js-mv">
    <div class="p-mv__slider p-mv-slider js-mv-slider swiper">
      <div class="p-mv-slider__wrapper swiper-wrapper">
        <picture class="p-mv-slider__img swiper-slide">
          <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/top-image-1-pc.png" media="(min-width: 768px)" /><!-- ○○px以上で表示する画像 -->
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/top-image-1.png" alt="<?php the_title(); ?>の画像">
        </picture>
        <picture class="p-mv-slider__img swiper-slide">
          <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/top-image-2-pc.png" media="(min-width: 768px)" /><!-- ○○px以上で表示する画像 -->
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/top-image-2.png" alt="<?php the_title(); ?>の画像">
        </picture>
        <picture class="p-mv-slider__img swiper-slide">
          <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/top-image-3-pc.png" media="(min-width: 768px)" /><!-- ○○px以上で表示する画像 -->
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/top-image-3.png" alt="<?php the_title(); ?>の画像">
        </picture>
      </div>
    </div>
    <!-- .p-mv-slider -->
    <div class="p-mv__inner l-inner">
      <div class="p-mv__head js-mv__head">
        <div class="p-mv__title">CHALLENGE<br>FROM<br><span>&nbsp;</span>THE<br class="u-desktop"><span>&nbsp;</span>BOTTOM</div>
        <div class="p-mv__box">
          <div class="p-mv__subtitle"><span>社会の基礎を支え</span></div>
          <div class="p-mv__subtitle"><span>基礎から世界を変革する会社</span></div>
        </div>
        <!-- /.p-mv__box -->
      </div>
      <!-- /.p-mv__head -->
    </div>
  </div>

  <div class="l-news p-news js-news">
    <div class="p-news__inner l-inner">
      <?php
      $news_query = new WP_Query(
        array(
          'post_type'      => 'post',
          'category_name' => 'news-cate',
          'posts_per_page' => 1,
        )
      );
      ?>
      <?php if ($news_query->have_posts()) : ?>
        <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>

          <a href="<?php the_permalink(); ?>" class="p-news__contents">
            <div class="p-news__title">NEWS</div>
            <div class="p-news__content">
              <time class="p-news__date"><?php echo get_the_date('Y.m.d'); ?></time>
              <div class="p-news__label">
                <?php
                $category = get_the_category();
                echo $category[0]->name;
                ?></div>
              <div class="p-news__text"><?php the_title(); ?></div>
            </div>
            <span class="p-news__arrow u-desktop"></span>
            <!-- /.p-news__content -->
          </a>
          <!-- /.p-news__contents -->


        <?php endwhile; ?>
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>
    </div>
    <!-- /.p-news__inner -->
  </div>
  <!-- /.l-news -->

  <section class="l-services p-services js-services">
    <div class="p-services__contents">
      <div class="p-services__img js-services-img">
        <img src="<?php echo get_template_directory_uri(); ?>/images/common/services-image.png" alt="">
      </div>
      <!-- /.p-services__img -->
      <div class="p-services__inner l-inner">
        <div class="p-services__content">
          <div class="p-services__head p-section-head">
            <div class="p-services__enTitle p-section-head--enTitle">SERVICES</div>
            <div class="p-services__slash p-section-head--slash"></div>
            <h2 class="p-services__title p-section-head--title">事業内容</h2>
          </div>
          <!-- /.p-section-head -->
          <div class="p-services__copy"><?php the_field('services-title'); ?></div>
          <div class="p-services__copy"><?php the_field('services-title2'); ?></div>
          <p class="p-services__text"><?php the_field('services-text'); ?></p>
          <div class="p-services__btn">
            <a href="<?php echo $services ?>" class="c-button">事業内容を更に知る<span></span></a>
          </div>
        </div>
        <!-- /.p-services__content -->
      </div>
      <!-- /.p-services__inner -->
    </div>
    <!-- /.p-services__contents -->
  </section>

  <section class="l-about p-about js-about">
    <div class="p-about__contents">
      <picture class="p-about__img u-mobile">
        <!-- <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/image-about-pc.jpg" media="(min-width: 768px)" />768px以上で表示する画像 -->
        <img src="<?php echo get_template_directory_uri(); ?>/images/common/image-about.jpg" alt="" class="u-mobile">
      </picture>
      <!-- /.p-about__img -->
      <div class="p-about__card js-about-card">
        <div class="p-about__head p-section-head">
          <div class="p-about__enTitle p-section-head--enTitle">ABOUT</div>
          <div class="p-about__slash p-section-head--slash"></div>
          <h2 class="p-about__title p-section-head--title">園崎組について</h2>
        </div>
        <!-- /.p-section-head -->
        <p class="p-about__text"><?php the_field('about-text'); ?></p>
        <div class="p-about__btn">
          <a href="<?php echo $about ?>" class="c-button">詳しく見る<span></span></a>
        </div>
        <div class="p-about__pic">
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/image-about-card.jpg" alt="">
        </div>
      </div>
      <!-- /.p-about__card -->
    </div>
    <!-- /.p-about__contents -->
  </section>

  <section class="l-works p-works js-works">
    <div class="p-works__inner l-inner">
      <div class="p-works__head p-section-head">
        <div class="p-works__enTitle p-section-head--enTitle">WORKS</div>
        <div class="p-works__slash p-section-head--slash"></div>
        <h2 class="p-works__title p-section-head--title">園崎組の実績</h2>
      </div>
      <!-- /.p-section-head -->
      <div class="p-works__copy">社会を基礎から、<br class="u-mobile">変革してきたプロジェクト</div>
      <p class="p-works__text">創業以來より培われた確かな技術力で社会を変革する様々な案件を手掛けてきました。<br class="u-dekstop">その一部を紹介させていただきます。</p>
    </div>
    <div class="p-works__contents">
      <a href="#" class="p-works__content p-card js-works-card">
        <div class="p-card__img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/image-works01.jpg" alt="">
          <span>01</span>
        </div>
        <div class="p-card__body">
          <h3 class="p-card__title">施工実績</h3>
          <p class="p-card__text">東南アジア某国での国家規模のプロジェクトに参画した際の園崎組のプロジェクトストーリーを記載しています。</p>
        </div>
        <!-- /.p-card__body -->
      </a>
      <!-- /.p-works__content -->
      <a href="#" class="p-works__content p-card js-works-card">
        <div class="p-card__img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/image-works02.jpg" alt="">
          <span>02</span>
        </div>
        <div class="p-card__body">
          <h3 class="p-card__title">商品納入実績</h3>
          <p class="p-card__text">土木・建設資材のプロフェッショナルとして、現場で必要となる各種資材を提供しています。</p>
        </div>
        <!-- /.p-card__body -->
      </a>
      <!-- /.p-works__content -->
    </div>
    <!-- /.p-works__contents -->
    <div class="p-works__btn">
      <a href="<?php echo $works ?>" class="c-button">実績一覧を見る<span></span></a>
    </div>
  </section>

  <section class="l-recruit p-recruit js-recruit">
    <div class="p-recruit__head p-section-head">
      <div class="p-recruit__enTitle p-section-head--enTitle">RECRUIT</div>
      <div class="p-recruit__slash p-section-head--slash"></div>
      <h2 class="p-recruit__title p-section-head--title">採用情報</h2>
    </div>
    <!-- /.p-section-head -->
    <div class="p-recruit__contents">
      <a href="<?php echo $contact ?>" class="p-recruit__img js-recruit-img">
        <img src="<?php echo get_template_directory_uri(); ?>/images/common/image-recruit-1.jpg" alt="">
        <div class="p-recruit__text">
          <span>園崎組を知る<span></span></span>
        </div>
        <!-- /.p-recruit__text -->
      </a>
      <a href="<?php echo $contact ?>" class="p-recruit__img js-recruit-img">
        <img src="<?php echo get_template_directory_uri(); ?>/images/common/image-recruit-2.jpg" alt="">
        <div class="p-recruit__text">
          <span>園崎組の一日<span></span></span>
        </div>
        <!-- /.p-recruit__text -->
      </a>
      <a href="<?php echo $contact ?>" class="p-recruit__img js-recruit-img">
        <img src="<?php echo get_template_directory_uri(); ?>/images/common/image-recruit-3.jpg" alt="">
        <div class="p-recruit__text">
          <span>求める人物像<span></span></span>
        </div>
        <!-- /.p-recruit__text -->
      </a>
    </div>
    <!-- /.p-recruit__contents -->
    <div class="p-recruit__btn">
      <a href="<?php echo $recruit ?>" class="c-button">エントリー一覧はこちら<span></span></a>
    </div>
  </section>



  <?php get_footer(); ?>
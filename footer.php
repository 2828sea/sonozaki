<?php
$home = esc_url(home_url('/'));
$services = esc_url(home_url('/services/'));
$works = esc_url(home_url('/works/'));
$about = esc_url(home_url('/about/'));
$recruit = esc_url(home_url('/recruit/'));
$contact = esc_url(home_url('/contact/'));
?>

<section class="l-contact p-contact">
  <div class="p-contact__inner l-inner">
    <div class="p-contact__head p-section-head">
      <div class="p-contact__enTitle p-section-head--enTitle">CONTACT</div>
      <div class="p-contact__slash p-section-head--slash"></div>
      <h2 class="p-contact__title p-section-head--title">お問い合わせ</h2>
    </div>
    <!-- /.p-section-head -->
    <div class="p-contact__text">園崎組では一般的な施工から特注部品、機械の開発・製造まで一貫して対応しております。<br class="u-desktop">お気軽にご連絡ください。</div>
    <div class="p-contact__box">
      <div class="p-contact__btn">
        <a href="<?php echo $contact ?>" class="c-button c-button--orange">施工のご相談<span></span></a>
      </div>
      <div class="p-contact__btn">
        <a href="<?php echo $contact ?>" class="c-button c-button--black">特注制作のご相談<span></span></a>
      </div>
    </div>
    <!-- /.p-contact__box -->
  </div>
  <!-- /.p-contact__inner -->
</section>
<footer class="l-footer p-footer">
  <div class="p-footer__inner l-inner">
    <nav class="p-footer__nav">
      <ul class="p-footer__item">
        <li class="p-footer__list"><a href="#">トップ</a></li>
        <li class="p-footer__list"><a href="#">事業内容</a></li>
        <li class="p-footer__list"><a href="#">園崎組について</a></li>
        <li class="p-footer__list"><a href="#">園崎組の実績</a></li>
        <li class="p-footer__list"><a href="#">採用</a></li>
        <li class="p-footer__list"><a href="#">お問い合わせ</a></li>
      </ul>
    </nav>

    <div class="p-footer__content">
      <a href="#" class="p-footer__logo">
        <img src="<?php echo get_template_directory_uri(); ?>/images/common/header-logo--white.svg" alt="">
      </a>
      <div class="p-footer__box">
        <div class="p-footer__company">株式会社園崎組</div>
        <div class="p-footer__address">〒000-000<br class="u-desktop"><span class="u-desktop u-mb24"></span>埼玉県秩父市×××××××</div>
        <div class="p-footer__tel">TEL 0494-00-0000</div>
        <div class="p-footer__fax">FAX 000-0000-0000</div>
      </div>
    </div>
    <!-- /.p-footer__content -->
  </div>
  <!-- /.p-footer__inner -->
</footer>

<div class="p-copy-right">
  <div class="p-copy-right__inner l-inner">
    <small>
      Copyright © SONOZAKI CO.LTD All Rights Reserved.
    </small>
  </div>
</div>
</main>
<?php wp_footer(); ?>
</body>

</html>
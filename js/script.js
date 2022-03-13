
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる

  var topBtn = $('.pagetop');
  topBtn.hide();

  // ボタンの表示設定
  $(window).scroll(function () {
    if ($(this).scrollTop() > 70) {
      // 指定px以上のスクロールでボタンを表示
      topBtn.fadeIn();
    } else {
      // 画面が指定pxより上ならボタンを非表示
      topBtn.fadeOut();
    }
  });

  // ボタンをクリックしたらスクロールして上に戻る
  topBtn.click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 300, 'swing');
    return false;
  });

  //ドロワーメニュー
  $("#MenuButton").click(function () {
    // $(".l-drawer-menu").toggleClass("is-show");
    // $(".p-drawer-menu").toggleClass("is-show");
    $(".js-drawer-open").toggleClass("open");
    $(".drawer-menu").toggleClass("open");
    $("html").toggleClass("is-fixed");

  });



  // スムーススクロール (絶対パスのリンク先が現在のページであった場合でも作動)

  $(document).on('click', 'a[href*="#"]', function () {
    let time = 400;
    let header = $('js-header').innerHeight();
    let target = $(this.hash);
    if (!target.length) return;
    let targetY = target.offset().top - header;
    $('html,body').animate({ scrollTop: targetY }, time, 'swing');
    return false;
  });


//ローディング画面の表示
$(window).on('load',function(){
  $(".p-loading").delay(3500).fadeOut('slow');//ローディング画面を1.5秒（1500ms）待機してからフェードアウト
  $(".p-loading__area").delay(3200).fadeOut('slow');//ローディング画像を1.2秒（1200ms）待機してからフェードアウト
});




// **********************************
//  ハンバーガーメニュー
// **********************************


  $('.js-hamburger').click(function () {
    $(this).toggleClass('active')

    if ($(this).hasClass('active')) {
      $('.js-globalMenuSp').addClass('active')
      $('.js-body').addClass('fixed')
    } else {
      $('.js-globalMenuSp').removeClass('active')
      $('.js-body').removeClass('fixed')
    }
  })



  
// **********************************
//  mvスライダーs
// **********************************

  const swiper = new Swiper('.js-mv-slider', {
    // Optional parameters
    // direction: 'vertical',
    loop: true,
    effect:'fade',
    speed:2000,
    autoplay: {
      delay:4000,
      disableOnInteraction: false,
    },
  });


// **********************************
//    //MV以下追従ヘッダー
// **********************************

  var target = $(".js-header");
  /* mvのmargin、border、paddingを含んだ高さを取得 */
  var height = $(".js-mv").outerHeight(true);
  /* 初期表示、スクロール時にイベント開始 */
  $(window).on("load scroll", function () {
      /* スクロール位置の高さが600pxより大きい、かつp-header--fixedクラスがない場合 */
      if ($(this).scrollTop() > height && target.hasClass("p-header--fixed") == false) {
          target.addClass("p-header--fixed");
          $(".js-hamburger").addClass("p-hamburger--fixed");
          target.fadeIn();
          $(".js-change--black").fadeIn();
      }
      /* スクロール位置の高さが600pxより小さい、かつp-header--fixedクラスがある場合 */
      else if ($(this).scrollTop() < height && target.hasClass("p-header--fixed") == true) {
          target.removeClass("p-header--fixed");
          $(".js-hamburger").removeClass("p-hamburger--fixed");
          // target.fadeOut();
          $(".js-change--black").fadeOut();
      }
  });

});

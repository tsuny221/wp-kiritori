jQuery(window).scroll(function () {
  jQuery(".scroll-up").each(function () {
    var elemOffset = jQuery(this).offset().top, //指定した要素の位置
      scrollPos = jQuery(window).scrollTop(), //スクロール量
      wh = jQuery(window).height(); //ウィンドウの高さ

    if (scrollPos > elemOffset - wh + 100) {
      jQuery(this).addClass("up");
    }
  });

  //aside/headerのフェードイン

  // this(window要素)がどれだけスクロールしたかをscrollTop()を使って値を取る
  jQuery(this).scrollTop();
  if (jQuery(this).scrollTop() > jQuery(".main-visual").height() / 3.5) {
    jQuery("header").css({ cssText: "opacity: 1 !important;" });
    jQuery(".mobile-menu__btn").css({ cssText: "opacity: 1 !important;" });
    jQuery(".side").addClass("inview");
  } else {
    jQuery("header").css({ cssText: "opacity: 0 !important;" });
    jQuery(".mobile-menu__btn").css({ cssText: "opacity: 0 !important;" });
    jQuery("body").removeClass("menu-open");
    jQuery(".side").removeClass("inview");
  }
});

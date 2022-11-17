


$(window).on('load resize', function () {
  if ($(window).innerWidth() < 600) {

    /*==================================================*/
    /* スマホの時の状態 */
    /*==================================================*/

    /* スライドショー */

    $('.slider').slick({
      autoplay: true, //自動でスクロール
      autoplaySpeed: 0, //自動再生のスライド切り替えまでの時間を設定
      speed: 7000, //スライドが流れる速度を設定
      cssEase: "linear", //スライドの流れ方を等速に設定
      slidesToShow: 1, //表示するスライドの数
      swipe: false, // 操作による切り替えはさせない
      arrows: false, //矢印非表示
      pauseOnFocus: false, //スライダーをフォーカスした時にスライドを停止させるか
      pauseOnHover: false, //スライダーにマウスホバーした時にスライドを停止させるか
      responsive: [
        {
          breakpoint: 375,
          settings: {
            slidesToShow: 1, //画面幅375px以下でスライド1枚表示
          }
        }
      ]
    });

    /* ハンバーガーメニュー */

    $(function () {
      $('.hamburger, .btn').click(function () {
        $('.hamburger').toggleClass('active');

        if ($('.hamburger').hasClass('active')) {
          $('.globalMenuSp').addClass('active');
        } else {
          $('.globalMenuSp').removeClass('active');
        }
      });
    });

  } else {

    /*==================================================*/
    /* タブレット・PCの時の状態 */
    /*==================================================*/

    /* スライドショー */

    $('.slider').slick({
      autoplay: true, //自動でスクロール
      autoplaySpeed: 3000, //自動再生のスライド切り替えまでの時間を設定
      speed: 4000, //スライドが流れる速度を設定
      cssEase: "linear", //スライドの流れ方を等速に設定
      slidesToShow: 2.5, //表示するスライドの数
      swipe: false, // 操作による切り替えはさせない
      arrows: false, //矢印非表示
      pauseOnFocus: false, //スライダーをフォーカスした時にスライドを停止させるか
      pauseOnHover: false, //スライダーにマウスホバーした時にスライドを停止させるか
      responsive: [
        {
          breakpoint: 850,
          settings: {
            slidesToShow: 3, //画面幅750px以下でスライド3枚表示
          }
        }
      ]
    });

    /* 追従メニュー */

    //headerの高さを取得
    var titleH = $("#site_title").outerHeight(true);

    $(function () {
      $(window).scroll(function () {
        if ($(this).scrollTop() > titleH) { // site_titleの高さ以上スクロールした固定
          $('#nav').addClass('fixed');
        } else {
          $('#nav').removeClass('fixed');
        }
      });
    });
  };
});
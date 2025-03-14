"use strict";

jQuery(function ($) {// この中であればWordpressでも「$」が使用可能になる
});

// burger menu
var burger = document.querySelector(".hamburger");
var nav = document.querySelector(".nav");
var header = document.querySelectorAll(".header");
var header__inner = document.querySelectorAll(".header__inner");
burger.addEventListener("click", function () {
  nav.classList.toggle("active");
  if (nav.classList.contains("active")) {
    $("body").css("overflow", "hidden");
    setTimeout(function () {
      nav.style.height = "100vh"; // 100vhまでの高さに変化
    }, 0); // 50ミリ秒後に実行（適宜調整してください）

    // header__inner に active クラスを付与
    header__inner.forEach(function (headerInnerElement) {
      headerInnerElement.classList.add("active");
    });
  } else {
    nav.style.height = "0"; // 高さを0に変化させて非表示
    $("body").css("overflow", "auto");

    // header__inner から active クラスを削除
    header__inner.forEach(function (headerInnerElement) {
      headerInnerElement.classList.remove("active");
    });
  }

  // burger animation
  burger.classList.toggle("active");
  header.forEach(function (headerElement) {
    headerElement.classList.toggle("active");
  });
});

//home非表示
var heroContents = document.querySelector('.js-hero-contents');
var headerHeight = heroContents.clientHeight * 1 / 5;
var headerHome = document.querySelector('.js-header-home');
window.addEventListener("scroll", function () {
  // hero__contents が表示されているかどうかを確認
  var scrollPosition = document.documentElement.scrollTop;
  // スクロールに合わせて要素をヘッダーの高さ分だけ移動（表示域から隠したり表示したり）
  if (window.scrollY > headerHeight) {
    headerHome.style.display = "flex";
  }
  if (window.scrollY < headerHeight) {
    headerHome.style.display = "none";
  }
});

// swiper メインビュー
var hero__swiper = new Swiper(".js-hero-swiper", {
  spaceBetween: 30,
  effect: "fade",
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: true,
    // If we need pagination
    pagination: {
      el: '.swiper-pagination'
    }
  }
});

//campaign__swiper
var swiper = new Swiper(".js-campaign__swiper", {
  loop: true,
  loopedSlides: 2,
  slidesPerView: "auto",
  spaceBetween: 40,
  centeredSlides: false,
  pagination: {
    el: ".swiper-pagination",
    clickable: true
  },
  navigation: {
    enabled: true,
    nextEl: '.campaign__swiper-next',
    prevEl: '.campaign__swiper-prev'
  }
});

// color-box
function checkInView() {
  $('.color').each(function () {
    var elementTop = $(this).offset().top;
    var elementBottom = elementTop + $(this).outerHeight();
    var viewportTop = $(window).scrollTop();
    var viewportBottom = viewportTop + $(window).height();
    // 要素が画面内にあるかどうかを判定
    if (elementBottom > viewportTop && elementTop < viewportBottom) {
      // 画面内にある場合の処理を記述
      // 例: 背景色が画面に現れたら何か処理をする
      $(this).trigger('inview');
    }
  });
}

// スクロールやリサイズ時に実行する関数
$(window).on('scroll resize', function () {
  checkInView();
});

// ページのロード時にも実行する
$(document).ready(function () {
  checkInView();
});

//要素の取得とスピードの設定
var box = $('.colorbox'),
  speed = 700;

//.colorboxの付いた全ての要素に対して下記の処理を行う
box.each(function () {
  $(this).append('<div class="color"></div>');
  var color = $(this).find($('.color')),
    image = $(this).find('img');
  var counter = 0;
  image.css('opacity', '0');
  color.css('width', '0%');
  //inviewを使って背景色が画面に現れたら処理をする
  color.on('inview', function () {
    if (counter == 0) {
      $(this).delay(200).animate({
        'width': '100%'
      }, speed, function () {
        image.css('opacity', '1');
        $(this).css({
          'left': '0',
          'right': 'auto'
        });
        $(this).animate({
          'width': '0%'
        }, speed);
      });
      counter = 1;
    }
  });
});

// galleryモーダル
document.addEventListener('DOMContentLoaded', function () {
  // モーダルの要素を取得
  var modal = document.getElementById('imageModal');
  var modalImage = document.getElementById('modalImage');

  // スクロール位置を記録する変数
  var scrollPosition = 0;

  // モーダル要素が存在する場合のみ処理を行う
  if (modal && modalImage) {
    // すべての画像を取得
    var galleryImages = document.querySelectorAll('.gallery__img-item');

    // 各画像にクリックイベントを追加
    galleryImages.forEach(function (img) {
      img.addEventListener('click', function () {
        // 現在のスクロール位置を記録
        scrollPosition = window.scrollY;

        // bodyを固定してスクロール無効化
        document.body.style.overflow = 'hidden';
        modal.style.display = "block"; // モーダルを表示
        modalImage.src = this.src; // クリックされた画像をモーダルに表示
      });
    });

    // モーダル外をクリックすると閉じる
    modal.addEventListener('click', function (event) {
      if (event.target === modal) {
        modal.style.display = "none"; // モーダルを非表示

        // スクロールロックを解除
        document.body.style.overflow = '';

        // **スクロール位置を元に戻さない**
      }
    });
  }
});

// information-pageタブ
document.addEventListener("DOMContentLoaded", function () {
  var tabs = document.querySelectorAll(".information-page-contents__tab-icon");
  var contents = document.querySelectorAll(".information-page-contents__tabs");

  // ボタンのクリックイベント
  tabs.forEach(function (tab, index) {
    tab.addEventListener("click", function () {
      // 他のタブとコンテンツのactiveクラスを削除
      tabs.forEach(function (t) {
        return t.classList.remove("active");
      });
      contents.forEach(function (c) {
        return c.classList.remove("active");
      });

      // クリックしたタブと対応するコンテンツにactiveクラスを追加
      tab.classList.add("active");
      contents[index].classList.add("active");

      // クエリパラメータを更新（ブラウザのバックボタン対応）
      window.history.pushState(null, '', "?tab=tab-content".concat(index + 1));
    });
  });

  // URLのクエリパラメータに基づいてタブをアクティブにする
  var urlParams = new URLSearchParams(window.location.search);
  var activeTab = urlParams.get('tab');
  if (activeTab) {
    // URLに基づいてタブとコンテンツを表示
    tabs.forEach(function (tab, index) {
      var targetTab = "tab-content".concat(index + 1);
      var targetContent = document.querySelector("#".concat(targetTab));

      // もしURLに一致するタブがあれば、そのタブとコンテンツをアクティブに
      if (activeTab === targetTab) {
        tab.classList.add('active');
        targetContent.classList.add('active');
      } else {
        tab.classList.remove('active');
        targetContent.classList.remove('active');
      }
    });
  } else {
    // デフォルトのタブを表示
    tabs[0].classList.add("active");
    contents[0].classList.add("active");
  }
});

// サイドバーアコーディオン
var sidebarArchive1 = document.querySelector('.js-sidebar-archive1');
var sidebarArchive2 = document.querySelector('.js-sidebar-archive2');

// 要素が存在する場合のみ、クリックイベントを追加する
if (sidebarArchive1) {
  sidebarArchive1.addEventListener('click', function () {
    toggleAccordion(sidebarArchive1);
  });
}
if (sidebarArchive2) {
  sidebarArchive2.addEventListener('click', function () {
    toggleAccordion(sidebarArchive2);
  });
}
function toggleAccordion(archive) {
  var list = archive.querySelector('ol');
  var button = archive.querySelector('button');
  if (!list || !button) return; // リストまたはボタンが存在しない場合は終了

  // トランジションを有効にするために、heightを指定する
  list.style.transition = 'max-height 0.3s ease-out';

  // トグルでopenクラスを追加/削除
  if (archive.classList.contains('open')) {
    // アコーディオンを閉じる
    list.style.maxHeight = '0px'; // 高さを0にして閉じる
    archive.classList.remove('open');
  } else {
    // アコーディオンを開く
    list.style.maxHeight = "".concat(list.scrollHeight, "px"); // リストの高さを動的に設定
    archive.classList.add('open');
  }
}

//faq
document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('.js-modal').forEach(function (question) {
    question.addEventListener('click', function () {
      var faqItem = question.closest('.faq-content');
      if (!faqItem) return;
      var answer = faqItem.querySelector('.js-faq-content');
      var faqLine2 = faqItem.querySelector('.faq-content__line2');
      question.classList.toggle('active');
      if (answer) answer.classList.toggle('active');
      if (faqLine2) faqLine2.classList.toggle('active');
    });
  });
});

// コンタクトフォーム
document.addEventListener('DOMContentLoaded', function () {
  // フォーム要素を取得
  var form = document.querySelector('form');
  var note = document.querySelector('.contactform__note');
  console.log("DOMContentLoaded triggered"); // ページの読み込み完了確認

  // フォームが見つからなかった場合の処理
  if (!form) {
    console.warn("Form element not found. This script will not run on this page.");
    return; // フォームが見つからなかったら以降の処理を中止
  }
  console.log("Form element found:", form); // formが取得されたことを確認

  var submitButton = form.querySelector('button[type="submit"]'); // 送信ボタンを取得
  if (!submitButton) {
    console.error("Submit button not found. Please ensure the form has a submit button.");
    return; // エラー時は以降の処理を中止
  }
  console.log("Submit button found:", submitButton); // 送信ボタンが取得できたことを確認

  // フォーム送信時のカスタムイベント設定（Contact Form 7用）
  form.addEventListener('wpcf7submit', function (event) {
    var isValid = true;

    // 必須項目を選択
    var requiredFields = document.querySelectorAll('input[required], textarea[required], input[type="radio"][required]');
    console.log("Required fields selected:", requiredFields);

    // すべての必須フィールドのチェック
    requiredFields.forEach(function (field) {
      var parent = field.closest('.contactform__item') || field.closest('.contact__checkbox');

      // parentがnullでないことを確認
      if (parent) {
        // ラジオボタンの必須チェック
        if (field.type === 'radio') {
          var radioGroup = document.querySelector("input[name=\"".concat(field.name, "\"]:checked"));
          if (!radioGroup) {
            parent.classList.add('active');
            isValid = false;
          } else {
            parent.classList.remove('active');
          }
        } else if (field.type === 'checkbox' && !field.checked) {
          // チェックボックスの必須チェック
          parent.classList.add('active');
          isValid = false;
        } else if (!field.value.trim()) {
          // その他の必須フィールドの未入力チェック
          parent.classList.add('active');
          isValid = false;
        } else {
          parent.classList.remove('active');
        }
      } else {
        console.warn('Parent element not found for field:', field);
      }
    });

    // エラーメッセージの表示制御
    if (!isValid) {
      console.log("Validation failed");
      form.classList.add('active');
      if (note) {
        note.classList.add('active');
      }
      event.preventDefault(); // バリデーション失敗時に送信をキャンセル
    } else {
      console.log("Validation passed");
      form.classList.remove('active');
      if (note) {
        note.classList.remove('active');
      }
      // フォーム送信成功時のリダイレクト
      window.location.href = './thanks.html';
    }
  });

  // Contact Form 7の送信成功時の処理
  form.addEventListener('wpcf7submit', function (event) {
    if (event.detail.status === 'mail_sent') {
      console.log("Form successfully submitted.");
    }
  });

  // Contact Form 7の送信失敗時の処理
  form.addEventListener('wpcf7submit', function (event) {
    if (event.detail.status === 'validation_failed') {
      console.log("Form submission failed due to validation errors.");
    }
  });
});
"use strict";

jQuery(function ($) {// この中であればWordpressでも「$」が使用可能になる
});

// burger menu
const burger = document.querySelector(".hamburger");
const nav = document.querySelector(".nav");
const header = document.querySelectorAll(".header");
const header__inner = document.querySelectorAll(".header__inner");

burger.addEventListener("click", () => {
  nav.classList.toggle("active");

  if (nav.classList.contains("active")) {
    $("body").css("overflow", "hidden");
    setTimeout(() => {
      nav.style.height = "100vh"; // 100vhまでの高さに変化
    }, 0); // 50ミリ秒後に実行（適宜調整してください）

    // header__inner に active クラスを付与
    header__inner.forEach((headerInnerElement) => {
      headerInnerElement.classList.add("active");
    });
  } else {
    nav.style.height = "0"; // 高さを0に変化させて非表示
    $("body").css("overflow", "auto");

    // header__inner から active クラスを削除
    header__inner.forEach((headerInnerElement) => {
      headerInnerElement.classList.remove("active");
    });
  }

  // burger animation
  burger.classList.toggle("active");
  header.forEach((headerElement) => {
    headerElement.classList.toggle("active");
  });
});


//home非表示
const heroContents = document.querySelector('.js-hero-contents');
const headerHeight = heroContents.clientHeight * 1 / 5;
const headerHome = document.querySelector('.js-header-home');

window.addEventListener("scroll", () => {

  // hero__contents が表示されているかどうかを確認
  let scrollPosition = document.documentElement.scrollTop;
  // スクロールに合わせて要素をヘッダーの高さ分だけ移動（表示域から隠したり表示したり）
  if (window.scrollY > headerHeight) {
    headerHome.style.display = "flex";
  }
  if (window.scrollY < headerHeight) {
    headerHome.style.display = "none";

  }
});



// swiper メインビュー
const hero__swiper = new Swiper(".js-hero-swiper", {
  spaceBetween: 30,
  effect: "fade",
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: true,
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
  },

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
    clickable: true,
  },
  navigation: {
    enabled: true,
    nextEl: '.campaign__swiper-next',
    prevEl: '.campaign__swiper-prev',
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
  $(this).append('<div class="color"></div>')
  var color = $(this).find($('.color')),
    image = $(this).find('img');
  var counter = 0;

  image.css('opacity', '0');
  color.css('width', '0%');
  //inviewを使って背景色が画面に現れたら処理をする
  color.on('inview', function () {
    if (counter == 0) {
      $(this).delay(200).animate({ 'width': '100%' }, speed, function () {
        image.css('opacity', '1');
        $(this).css({ 'left': '0', 'right': 'auto' });
        $(this).animate({ 'width': '0%' }, speed);
      })
      counter = 1;
    }
  });
});


// galleryモーダル
document.addEventListener('DOMContentLoaded', function () {
  // モーダルの要素を取得
  const modal = document.getElementById('imageModal');
  const modalImage = document.getElementById('modalImage');

  // スクロール位置を記録する変数
  let scrollPosition = 0;

  // モーダル要素が存在する場合のみ処理を行う
  if (modal && modalImage) {
    // すべての画像を取得
    const galleryImages = document.querySelectorAll('.js-gallery-img');

    // 各画像にクリックイベントを追加
    galleryImages.forEach(img => {
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
document.addEventListener('DOMContentLoaded', function () {
  // タブボタンをすべて取得
  const tabButtons2 = document.querySelectorAll('.js-tab-menu2');

  // タブボタンにクリックイベントを追加
  tabButtons2.forEach(button => {
    button.addEventListener('click', function () {
      // 全てのタブコンテンツを非表示にする（activeクラスを削除）
      const informationTabBodies = document.querySelectorAll('.js-information-tabbody');
      informationTabBodies.forEach(tabBody => {
        tabBody.classList.remove('active'); // 全てのタブコンテンツから active クラスを削除
      });

      // 対応するタブコンテンツを表示する（activeクラスを追加）
      const targetId = this.getAttribute('data-target'); // クリックされたボタンの data-target 属性を取得
      const targetTabBody = document.getElementById(targetId); // 該当するタブコンテンツを取得
      if (targetTabBody) {
        targetTabBody.classList.add('active'); // 該当するタブコンテンツに active クラスを追加
      }

      // クリックされたボタンをアクティブ状態にする
      tabButtons2.forEach(btn => btn.classList.remove('active')); // 全ボタンのアクティブ状態を解除
      this.classList.add('active'); // クリックされたボタンをアクティブに
    });
  });
});



// サイドバーアコーディオン
const sidebarArchive1 = document.querySelector('.js-sidebar-archive1');
const sidebarArchive2 = document.querySelector('.js-sidebar-archive2');

// 要素が存在する場合のみ、クリックイベントを追加する
if (sidebarArchive1) {
  sidebarArchive1.addEventListener('click', function() {
    toggleAccordion(sidebarArchive1);
  });
}

if (sidebarArchive2) {
  sidebarArchive2.addEventListener('click', function() {
    toggleAccordion(sidebarArchive2);
  });
}

function toggleAccordion(archive) {
  const list = archive.querySelector('ol');
  const button = archive.querySelector('button');

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
    list.style.maxHeight = `${list.scrollHeight}px`; // リストの高さを動的に設定
    archive.classList.add('open');
  }
}





  // FAQ 全ての質問部分(js-modal)にイベントを追加
  document.querySelectorAll('.js-modal').forEach((question) => {
    question.addEventListener('click', () => {
      // 親要素(faq-content)を取得
      const faqItem = question.closest('.faq-content-lines');
      if (!faqItem) return;
  
      // faq-content-line2を取得
      const faqLine2 = faqItem.querySelector('.faq-content__line2');
  
      // 質問部分と回答部分を取得
      const answer = faqItem.querySelector('.js-faq-content');
  
      // activeクラスをトグル
      question.classList.toggle('active'); // クリックされた質問部分
      if (answer) {
        answer.classList.toggle('active'); // 回答部分
      }
      if (faqLine2) {
        faqLine2.classList.toggle('active'); // faq-content-line2
      }
    });
  });
  
  




// コンタクトフォーム
document.addEventListener('DOMContentLoaded', function () {
  // フォーム要素を取得
  const form = document.querySelector('#form');
  const note = document.querySelector('.contactform__note');

  console.log("DOMContentLoaded triggered"); // ページの読み込み完了確認

  // フォームが見つからなかった場合の処理
  if (!form) {
    console.warn("Form element not found. This script will not run on this page."); // 警告メッセージ
    return; // フォームが見つからなかったら以降の処理を中止
  }

  console.log("Form element found:", form); // formが取得されたことを確認

  const submitButton = form.querySelector('button[type="submit"]'); // 送信ボタンを取得
  if (!submitButton) {
    console.error("Submit button not found. Please ensure the form has a submit button.");
    return; // エラー時は以降の処理を中止
  }

  // 送信ボタンのclickイベントの設定
  submitButton.addEventListener('click', function (event) {
    event.preventDefault(); // フォーム送信を止める
    console.log("Submit button clicked"); // 送信ボタンがクリックされた確認
    let isValid = true;

    // 必須項目を選択
    const requiredFields = document.querySelectorAll('input[required], textarea[required], input[type="radio"][required]');
    console.log("Required fields selected:", requiredFields);

    // すべての必須フィールドのチェック
    requiredFields.forEach(function (field) {
      const parent = field.closest('.contactform__item') || field.closest('.contact__checkbox');

      if (field.type === 'radio') {
        // ラジオボタンの必須チェック
        const radioGroup = document.querySelector(`input[name="${field.name}"]:checked`);
        if (!radioGroup) {
          parent.classList.add('active');
          isValid = false;
        } else {
          parent.classList.remove('active');
        }
      } else if (!field.value.trim()) {
        // その他の必須フィールドの未入力チェック
        parent.classList.add('active');
        isValid = false;
      } else {
        parent.classList.remove('active');
      }
    });

    // エラーメッセージの表示制御
    if (!isValid) {
      console.log("Validation failed");
      form.classList.add('active');
      if (note) {
        note.classList.add('active');
      }
    } else {
      console.log("Validation passed, redirecting to thanks.html");
      form.classList.remove('active');
      if (note) {
        note.classList.remove('active');
      }
      // バリデーションを通過した場合、リダイレクト
      window.location.href = './thanks.html';
    }
  });
});


    





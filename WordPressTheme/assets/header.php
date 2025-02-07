<!doctype html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="robots" content="noindex" />
  <!-- meta情報 -->
  <title>CodeUps</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <!-- ogp -->
  <meta property="og:title" content="" />
  <meta property="og:type" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:description" content="" />
  <!-- ファビコン -->

</head>

<body>
  <header class="header">
    <nav class="header__nav nav" id="js-nav">
      <div class="nav__inner inner">
        <div class="nav__items">
          <ul class="nav__items-left">
            <li class="nav__item nav__item--bold">
              <a href="./campaign.html">キャンペーン</a>
            </li>
            <li class="nav__item"><a href="#">ライセンス取得</a></li>
            <li class="nav__item"><a href="#">貸切体験ダイビング</a></li>
            <li class="nav__item"><a href="#">ナイトダイビング</a></li>

            <li class="nav__item nav__item--bold">
              <a href="./about.html">私たちについて</a>
            </li>

            <li class="nav__item nav__item--bold">
              <a href="./information.html">ダイビング情報</a>
            </li>
            <li class="nav__item"><a href="#">ライセンス講習</a></li>
            <li class="nav__item"><a href="#">体験ダイビング</a></li>
            <li class="nav__item"><a href="#">ファンダイビング</a></li>

            <li class="nav__item nav__item--bold">
              <a href="./blog.html">ブログ</a>
            </li>
          </ul>
          <ul class="nav__items-right">
            <li class="nav__item nav__item--bold">
              <a href="./voice.html">お客様の声</a>
            </li>

            <li class="nav__item nav__item--bold">
              <a href="./price.html">料金一覧</a>
            </li>
            <li class="nav__item"><a href="#">ライセンス講習</a></li>
            <li class="nav__item"><a href="#">体験ダイビング</a></li>
            <li class="nav__item"><a href="#">ファンダイビング</a></li>

            <li class="nav__item nav__item--bold">
              <a href="./FAQ.html">よくある質問</a>
            </li>

            <li class="nav__item nav__item--bold">
              <a href="./privacy.html">プライバシー<br />ポリシー</a>
            </li>

            <li class="nav__item nav__item--bold">
              <a href="./terms.html">利用規約</a>
            </li>

            <li class="nav__item nav__item--bold">
              <a href="./contact-page.html">お問い合わせ</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="header__inner">
      <h1 class="header__inner-logo">
        <a href="./index.html" class="logo">
          <picture class="logo__img-codeups">
            <source media="(max-width: 767px)"
              srcset="<?php echo get_theme_file_uri(); ?>//images/common/CodeUps1.svg" />
            <source media="(min-width: 767px)"
              srcset="<?php echo get_theme_file_uri(); ?>//images/common/CodeUps.svg" />
            <img src="<?php echo get_theme_file_uri(); ?>/images/common/CodeUps1.svg" alt="codeUps-icon" />
          </picture>
        </a>
      </h1>
      <nav class="hader__nav nav-pc">
        <ul class="nav-pc__items">
          <li>
            <a href="./campaign.html">
              <h2 class="nav-pc__item-title">Campaign</h2>
              <p class="nav-pc__items-subtitle">キャンペーン</p>
            </a>
          </li>
          <li>
            <a href="./about.html">
              <h2 class="nav-pc__item-title">About us</h2>
              <p class="nav-pc__items-subtitle">私たちについて</p>
            </a>
          </li>
          <li>
            <a href="./information.html">
              <h2 class="nav-pc__item-title">Information</h2>
              <p class="nav-pc__items-subtitle">ダイビング情報</p>
            </a>
          </li>
          <li>
            <a href="./blog.html">
              <h2 class="nav-pc__item-title">Blog</h2>
              <p class="nav-pc__items-subtitle">ブログ</p>
            </a>
          </li>
          <li>
            <a href="./voice.html">
              <h2 class="nav-pc__item-title">Voice</h2>
              <p class="nav-pc__items-subtitle">お客様の声</p>
            </a>
          </li>
          <li>
            <a href="./price.html">
              <h2 class="nav-pc__item-title">Price</h2>
              <p class="nav-pc__items-subtitle">料金一覧</p>
            </a>
          </li>
          <li>
            <a href="./FAQ.html">
              <h2 class="nav-pc__item-title">FAQ</h2>
              <p class="nav-pc__items-subtitle">よくある質問</p>
            </a>
          </li>
          <li>
            <a href="./contact-page.html">
              <h2 class="nav-pc__item-title">Contact</h2>
              <p class="nav-pc__items-subtitle">お問合せ</p>
            </a>
          </li>
        </ul>
      </nav>
      <div class="header__item hamburger" id="js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <div class="header__home js-header-home">
      <a href="#"><img src="<?php echo get_theme_file_uri(); ?>/images/common/home@2x.png" alt="" /></a>
    </div>
  </header>
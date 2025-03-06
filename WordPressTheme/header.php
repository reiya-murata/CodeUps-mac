<!doctype html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="robots" content="noindex" />
  <!-- meta情報 -->
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
<?php 
$campaign = esc_url(home_url('/campaign/'));
$about = esc_url(home_url('/about-us/'));
$information = esc_url(home_url('/information/'));
$blog = esc_url(home_url('/blog/'));
$voice = esc_url(home_url('/voice/'));
$price = esc_url(home_url('/price/'));
$faq = esc_url(home_url('/faq/'));
$contact = esc_url(home_url('/contact/'));
$privacy = esc_url(home_url('/privacy/'));
$terms = esc_url(home_url('/terms/'));
?>
<?php
$fan_link = get_term_link('fan', 'campaign_category');
$license_link = get_term_link('license', 'campaign_category');
$experience_link = get_term_link('experience', 'campaign_category');
?>
<?php wp_head(); ?>

<body>
  <header class="header">
    <nav class="header__nav nav" id="js-nav">
      <div class="nav__inner inner">
        <div class="nav__items">
          <ul class="nav__items-left">
            <li class="nav__item nav__item--bold">
              <a href="
              <?php echo $campaign; ?>">キャンペーン</a>
            </li>
            <li class="nav__item"><a href="<?php echo esc_url($license_link); ?>">ライセンス取得</a></li>
            <li class="nav__item"><a href="<?php echo esc_url($fan_link); ?>">貸切体験ダイビング</a></li>
            <li class="nav__item"><a href="<?php echo esc_url($experience_link); ?>">ナイトダイビング</a></li>
            <li class="nav__item nav__item--bold">
              <a href="<?php echo $about; ?>">私たちについて</a>
            </li>
            <li class="nav__item nav__item--bold">
              <a href="<?php echo $information; ?>">ダイビング情報</a>
            </li>
            <li class="nav__item"><a
                href="<?php echo esc_url(home_url('/information/#information-page-contents__tab1')); ?>">ライセンス講習</a>
            </li>
            <li class="nav__item"><a
                href="<?php echo esc_url(home_url('/information/#information-page-contents__tab3')); ?>">体験ダイビング</a>
            </li>
            <li class="nav__item"><a
                href="<?php echo esc_url(home_url('/information/#information-page-contents__tab2')); ?>">ファンダイビング</a>
            </li>
            <li class="nav__item nav__item--bold">
              <a href="<?php echo $blog; ?>">ブログ</a>
            </li>
          </ul>
          <ul class="nav__items-right">
            <li class="nav__item nav__item--bold">
              <a href="<?php echo $voice; ?>">お客様の声</a>
            </li>
            <li class="nav__item nav__item--bold">
              <a href="<?php echo $price; ?>">料金一覧</a>
            </li>
            <li class="nav__item"><a href="<?php echo esc_url(home_url('/price/#license')); ?>">ライセンス講習</a></li>
            <li class="nav__item"><a href="<?php echo esc_url(home_url('/price/#experience')); ?>">体験ダイビング</a></li>
            <li class="nav__item"><a href="<?php echo esc_url(home_url('/price/#fan')); ?>">ファンダイビング</a></li>
            <li class="nav__item nav__item--bold">
              <a href="<?php echo $faq; ?>">よくある質問</a>
            </li>
            <li class="nav__item nav__item--bold">
              <a href="<?php echo $privacy; ?>">プライバシー<br />ポリシー</a>
            </li>
            <li class="nav__item nav__item--bold">
              <a href="<?php echo $terms; ?>">利用規約</a>
            </li>
            <li class="nav__item nav__item--bold">
              <a href="<?php echo $contact; ?>">お問い合わせ</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="header__inner">
      <h1 class="header__inner-logo">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
          <picture class="logo__img-codeups">
            <source media="(max-width: 767px)"
              srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/CodeUps1.svg" />
            <source media="(min-width: 767px)"
              srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/CodeUps.svg" />
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/CodeUps1.svg" alt="codeUps-icon" />
          </picture>
        </a>
      </h1>
      <nav class="header__nav nav-pc">
        <ul class="nav-pc__items">
          <li>
            <a href="<?php echo $campaign; ?>">
              <h2 class="nav-pc__item-title">Campaign</h2>
              <p class="nav-pc__items-subtitle">キャンペーン</p>
            </a>
          </li>
          <li>
            <a href="<?php echo $about; ?>">
              <h2 class="nav-pc__item-title">About us</h2>
              <p class="nav-pc__items-subtitle">私たちについて</p>
            </a>
          </li>
          <li>
            <a href="<?php echo $information; ?>">
              <h2 class="nav-pc__item-title">Information</h2>
              <p class="nav-pc__items-subtitle">ダイビング情報</p>
            </a>
          </li>
          <li>
            <a href="<?php echo $blog; ?>">
              <h2 class="nav-pc__item-title">Blog</h2>
              <p class="nav-pc__items-subtitle">ブログ</p>
            </a>
          </li>
          <li>
            <a href="<?php echo $voice; ?>">
              <h2 class="nav-pc__item-title">Voice</h2>
              <p class="nav-pc__items-subtitle">お客様の声</p>
            </a>
          </li>
          <li>
            <a href="<?php echo $price; ?>">
              <h2 class="nav-pc__item-title">Price</h2>
              <p class="nav-pc__items-subtitle">料金一覧</p>
            </a>
          </li>
          <li>
            <a href="<?php echo $faq; ?>">
              <h2 class="nav-pc__item-title">FAQ</h2>
              <p class="nav-pc__items-subtitle">よくある質問</p>
            </a>
          </li>
          <li>
            <a href="<?php echo $contact; ?>">
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
      <a href="#"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/home@2x.png" alt="" /></a>
    </div>
  </header>
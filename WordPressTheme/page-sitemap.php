<?php get_header(); ?>

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

<main>
  <section class="sub-mv">
    <div class="sub-mv__hero">
      <h1 class="sub-mv__titles page-title">site MAP</h1>
    </div>
    <div class="sub-mv__img js-hero-contents">
      <picture>
        <source media="(max-width: 767px)"
          srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sitemap-sp.jpg">
        <source media="(min-width: 767px)"
          srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sitemap-pc.jpg">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sitemap-pc.jpg" alt=" 魚の群れの画像">
      </picture>
    </div>
  </section>

  <?php get_template_part('parts/breadcrumbs')?>

  <section class="site-map-contents l-site-map-contents">
    <div class="site-map-contents__inner inner">
      <nav class="site-map__nav nav nav--bottom">
        <div class="nav__items-bottom--site-map">
          <div class="nav__flexes">
            <div class="nav__flexes-right">
              <ul class="nav__flex ">
                <li class="nav__item nav__item--black">
                  <a href="<?php echo $campaign ?>">キャンペーン</a>
                </li>
                <li class="nav__item">
                  <a href="<?php echo esc_url($license_link); ?>">ライセンス取得</a>
                </li>
                <li class="nav__item">
                  <a href="<?php echo esc_url($fan_link); ?>">貸切体験ダイビング</a>
                </li>
                <li class="nav__item">
                  <a href="<?php echo esc_url($experience_link); ?>">ナイトダイビング</a>
                </li>
                <li class="nav__item nav__item--black">
                  <a href="<?php echo $about ?>"> 私たちについて</a>
                </li>
              </ul>
              <ul class="nav__flex ">
                <li class="nav__item nav__item--black">
                  <a href="<?php echo $information ?>"> ダイビング情報</a>
                </li>
                <li class="nav__item">
                  <a
                    href="<?php echo esc_url(add_query_arg('tab', 'tab-content1', home_url('/information'))); ?>">ライセンス講習</a>
                </li>
                <li class="nav__item"><a
                    href="<?php echo esc_url(add_query_arg('tab', 'tab-content3', home_url('/information'))); ?>">体験ダイビング</a>
                </li>
                <li class="nav__item">
                  <a href="<?php echo esc_url(add_query_arg('tab', 'tab-content2', home_url('/information'))); ?>">
                    ファンダイビング</a>
                </li>
                <li class="nav__item nav__item--black">
                  <a href="<?php echo $blog ?>">ブログ</a>
                </li>
              </ul>
            </div>
            <div class="nav__flexes-left">
              <ul class="nav__flex">
                <li class="nav__item nav__item--black">
                  <a href="<?php echo $voice ?>">お客様の声</a>
                </li>
                <li class="nav__item nav__item--black">
                  <a href="<?php echo $price ?>">料金一覧</a>
                </li>
                <li class="nav__item"><a href="<?php echo esc_url(home_url('/price/#license')); ?>">ライセンス講習</a></li>
                <li class="nav__item"><a href="<?php echo esc_url(home_url('/price/#experience')); ?>">体験ダイビング</a></li>
                <li class="nav__item">
                  <a href="<?php echo esc_url(home_url('/price/#fan')); ?>">ファンダイビング</a>
                </li>
              </ul>
              <ul class="nav__flex">
                <li class="nav__item nav__item--black">
                  <a href="<?php echo $faq ?>">よくある質問</a>
                </li>
                <li class="nav__item nav__item--black">
                  <a href="<?php echo $privacy ?>">プライバシー<br>ポリシー</a>
                </li>
                <li class="nav__item nav__item--black">
                  <a href="<?php echo $terms ?>">利用規約</a>
                </li>
                <li class="nav__item nav__item--black">
                  <a href="<?php echo $contact ?>">お問い合わせ</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </section>

</main>

<?php get_footer(); ?>
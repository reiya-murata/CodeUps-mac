<?php get_header(); ?>
<?php wp_head(); ?>
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
                  <a href="#">ライセンス取得</a>
                </li>
                <li class="nav__item">
                  <a href="#">貸切体験ダイビング</a>
                </li>
                <li class="nav__item">
                  <a href="#">ナイトダイビング</a>
                </li>

                <li class="nav__item nav__item--black">
                  <a href="                  <?php echo $about ?>"> 私たちについて</a>
                </li>
              </ul>

              <ul class="nav__flex ">
                <li class="nav__item nav__item--black">
                  <a href="                  <?php echo $information ?>"> ダイビング情報</a>
                </li>
                <li class="nav__item">
                  <a href="#">ライセンス講習</a>
                </li>
                <li class="nav__item"><a href="#">体験ダイビング</a></li>
                <li class="nav__item">
                  <a href="#">ファンダイビング</a>
                </li>

                <li class="nav__item nav__item--black">
                  <a href="                  <?php echo $blog ?>">ブログ</a>
                </li>
              </ul>
            </div>
            <div class="nav__flexes-left">
              <ul class="nav__flex">
                <li class="nav__item nav__item--black">
                  <a href="                  <?php echo $voice ?>">お客様の声</a>
                </li>

                <li class="nav__item nav__item--black">
                  <a href="                  <?php echo $price ?>">料金一覧</a>
                </li>
                <li class="nav__item"><a href="#">ライセンス講習</a></li>
                <li class="nav__item"><a href="#">体験ダイビング</a></li>
                <li class="nav__item">
                  <a href="#">ファンダイビング</a>
                </li>
              </ul>

              <ul class="nav__flex">
                <li class="nav__item nav__item--black">
                  <a href="                  <?php echo $faq ?>">よくある質問</a>
                </li>
                <li class="nav__item nav__item--black">
                  <a href="                  <?php echo $privacy ?>">プライバシー<br>ポリシー</a>
                </li>
                <li class="nav__item nav__item--black">
                  <a href="                  <?php echo $terms ?>">利用規約</a>
                </li>
                <li class="nav__item nav__item--black">
                  <a href="                  <?php echo $contact ?>">お問い合わせ</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </section>


  <section class="contact l-contact">
    <div class="contact__inner inner">
      <div class="contact__card">
        <div class="contact__left">
          <div class="contact__logo-codeups">
            <picture class="logo__contact-codeups">
              <source media="(max-width: 767px)"
                srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/CodeUps__bottom-sp.svg" />
              <source media="(min-width: 767px)"
                srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/cordUps_blue.svg" />
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/cordUps_blue.svg" alt="cordUpsのロゴ" />
            </picture>
          </div>
          <div class="contact__left-address">
            <div class="contact__contents">
              <p class="contact__content">
                沖縄県那覇市1-1 <br />
                TEL:0120-000-0000 <br />
                営業時間:8:30-19:00 <br />
                定休日:毎週火曜日
              </p>
            </div>

            <div class="contact__map">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/contact.1.jpg" alt="地図の画像" />
            </div>
          </div>
        </div>

        <div class="contact__right">
          <div class="contact__title section-title--contact">
            <p class="section-title__main">contact</p>
            <h2 class="section-title__sub">お問い合わせ</h2>
          </div>
          <h3 class="section-title__sub contact__sub">
            ご予約・お問い合わせはコチラ
          </h3>
          <div class="contact__button">
            <a href="<?php echo $contact?>" class="button">
              Contact us<span class="button__stickarrow"></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php wp_footer();?>
<?php get_footer(); ?>
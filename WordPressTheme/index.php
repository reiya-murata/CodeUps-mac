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

<main>
  <section class="hero">
    <div class="hero__contents js-hero-contents">
      <p class="hero__title">DIVING</p>
      <p class="hero__subtitle">into the ocean</p>
    </div>
    <!-- main-view-img -->
    <div class="hero__imgs">
      <div class="hero__img">
        <div class="swiper hero__swiper js-hero-swiper">
          <div class="swiper-wrapper">
            <div class="hero__slide swiper-slide">
              <?php
                // 現在のページの投稿IDを取得
                $post_id = get_the_ID();
                // SCFから 'mainvisuals' グループフィールドを取得
                $mainvisuals = SCF::get('mainvisuals', $post_id);
                // mainvisuals が存在する場合
                if ($mainvisuals) :
                // 'mainvisual_pc' と 'mainvisual_sp' をそれぞれ取得
                $mainvisual_pc = isset($mainvisuals['mainvisual_pc']) ? esc_url($mainvisuals['mainvisual_pc']) : get_theme_file_uri() . '/assets/images/common/main-view.pc.1.jpg'; // デフォルトのPC画像
                $mainvisual_sp = isset($mainvisuals['mainvisual_sp']) ? esc_url($mainvisuals['mainvisual_sp']) : get_theme_file_uri() . '/assets/images/common/main-view.1.jpg'; // デフォルトのSP画像
              ?>
              <div class="hero__slide swiper-slide">
                <picture class="hero__mainvisual">
                  <source media="(max-width: 767px)" srcset="<?php echo $mainvisual_sp; ?>" />
                  <source media="(min-width: 767px)" srcset="<?php echo $mainvisual_pc; ?>" />
                  <img src="<?php echo $mainvisual_pc; ?>" alt="turtle-img" />
                </picture>
              </div>
              <?php
                else :
                // mainvisuals が空の場合
                echo 'メインビジュアルが設定されていません。';
                endif;
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="campaign l-campaign">
    <div class="campaign__inner inner">
      <div class="campaign__title section-title">
        <p class="section-title__main">Campaign</p>
        <h2 class="section-title__sub">キャンペーン</h2>
      </div>
      <div class="campaign__swiper">
        <div class="swiper campaign__swiper js-campaign__swiper">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper campaign__slider">
            <!-- Slides -->
            <div class="campaign__slide swiper-slide">
              <div class="slide-card">
                <a href="#">
                  <div class="slide-card__header">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign.4.jpg" alt="ダイビングの画像" />
                  </div>
                  <div class="slide-card__body">
                    <div class="slide-card__icon card-icon">
                      <h2 class="slide-card__icon-title">
                        ファンダイビング
                      </h2>
                    </div>
                    <div class="slide-card__title-campaign">
                      <h2>貸切ファンダイビング</h2>
                    </div>
                    <p class="slide-card__text-campaign">
                      全部コミコミ(お一人様)
                    </p>
                    <div class="slide-card__prices">
                      <div class="slide-card__prices-aria">
                        <h3 class="slide-card__price">¥20,000</h3>
                      </div>
                      <div class="slide-card__discounts">
                        <h3 class="slide-card__discount">¥16,000</h3>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="campaign__slide swiper-slide">
              <div class="slide-card">
                <a href="#">
                  <div class="slide-card__header">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign.1.jpg" alt="サンゴの画像" />
                  </div>
                  <div class="slide-card__body">
                    <div class="slide-card__icon card-icon">
                      <h2 class="slide-card__icon-title">ライセンス講習</h2>
                    </div>
                    <div class="slide-card__title-campaign">
                      <h2>ライセンス取得</h2>
                    </div>
                    <p class="slide-card__text-campaign">
                      全部コミコミ(お一人様)
                    </p>
                    <div class="slide-card__prices">
                      <div class="slide-card__prices-aria">
                        <h3 class="slide-card__price">¥56,000</h3>
                      </div>
                      <div class="slide-card__discounts">
                        <h3 class="slide-card__discount">¥46,000</h3>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="campaign__slide swiper-slide">
              <div class="slide-card">
                <a href="#">
                  <div class="slide-card__header">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign.2.jpg" alt="クラゲの画像" />
                  </div>
                  <div class="slide-card__body">
                    <div class="slide-card__icon card-icon">
                      <h2 class="slide-card__icon-title">体験ダイビング</h2>
                    </div>
                    <div class="slide-card__title-campaign">
                      <h2>貸切体験ダイビング</h2>
                    </div>
                    <p class="slide-card__text-campaign">
                      全部コミコミ(お一人様)
                    </p>
                    <div class="slide-card__prices">
                      <div class="slide-card__prices-aria">
                        <h3 class="slide-card__price">¥24,000</h3>
                      </div>
                      <div class="slide-card__discounts">
                        <h3 class="slide-card__discount">¥18,000</h3>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="campaign__slide swiper-slide">
              <div class="slide-card">
                <a href="#">
                  <div class="slide-card__header">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign.3.jpg" alt="ビーチの画像" />
                  </div>
                  <div class="slide-card__body">
                    <div class="slide-card__icon card-icon">
                      <h2 class="slide-card__icon-title">体験ダイビング</h2>
                    </div>
                    <div class="slide-card__title-campaign">
                      <h2>ナイトダイビング</h2>
                    </div>
                    <p class="slide-card__text-campaign">
                      全部コミコミ(お一人様)
                    </p>
                    <div class="slide-card__prices">
                      <div class="slide-card__prices-aria-">
                        <h3 class="slide-card__price">¥10,000</h3>
                      </div>
                      <div class="slide-card__discounts">
                        <h3 class="slide-card__discount">¥8,000</h3>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="campaign__slide swiper-slide">
              <div class="slide-card">
                <a href="#">
                  <div class="slide-card__header">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign.4.jpg" alt="ダイビングの画像" />
                  </div>
                  <div class="slide-card__body">
                    <div class="slide-card__icon card-icon">
                      <h2 class="slide-card__icon-title">
                        ファンダイビング
                      </h2>
                    </div>
                    <div class="slide-card__title-campaign">
                      <h2>貸切ファンダイビング</h2>
                    </div>
                    <p class="slide-card__text-campaign">
                      全部コミコミ(お一人様)
                    </p>
                    <div class="slide-card__prices">
                      <div class="slide-card__prices-aria">
                        <h3 class="slide-card__price">¥20,000</h3>
                      </div>
                      <div class="slide-card__discounts">
                        <h3 class="slide-card__discount">¥16,000</h3>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="campaign__slide swiper-slide">
              <div class="slide-card">
                <a href="#">
                  <div class="slide-card__header">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign.1.jpg" alt="サンゴの画像" />
                  </div>
                  <div class="slide-card__body">
                    <div class="slide-card__icon card-icon">
                      <h2 class="slide-card__icon-title">ライセンス講習</h2>
                    </div>
                    <div class="slide-card__title-campaign">
                      <h2>ライセンス取得</h2>
                    </div>
                    <p class="slide-card__text-campaign">
                      全部コミコミ(お一人様)
                    </p>
                    <div class="slide-card__prices">
                      <div class="slide-card__prices-aria">
                        <h3 class="slide-card__price">¥56,000</h3>
                      </div>
                      <div class="slide-card__discounts">
                        <h3 class="slide-card__discount">¥46,000</h3>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="campaign__slide swiper-slide">
              <div class="slide-card">
                <a href="#">
                  <div class="slide-card__header">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign.2.jpg" alt="クラゲの画像" />
                  </div>
                  <div class="slide-card__body">
                    <div class="slide-card__icon card-icon">
                      <h2 class="slide-card__icon-title">体験ダイビング</h2>
                    </div>
                    <div class="slide-card__title-campaign">
                      <h2>貸切体験ダイビング</h2>
                    </div>
                    <p class="slide-card__text-campaign">
                      全部コミコミ(お一人様)
                    </p>
                    <div class="slide-card__prices">
                      <div class="slide-card__prices-aria">
                        <h3 class="slide-card__price">¥24,000</h3>
                      </div>
                      <div class="slide-card__discounts">
                        <h3 class="slide-card__discount">¥18,000</h3>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="campaign__slide swiper-slide">
              <div class="slide-card">
                <a href="#">
                  <div class="slide-card__header">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign.3.jpg" alt="ビーチの画像" />
                  </div>
                  <div class="slide-card__body">
                    <div class="slide-card__icon card-icon">
                      <h2 class="slide-card__icon-title">体験ダイビング</h2>
                    </div>
                    <div class="slide-card__title-campaign">
                      <h2>ナイトダイビング</h2>
                    </div>
                    <p class="slide-card__text-campaign">
                      全部コミコミ(お一人様)
                    </p>
                    <div class="slide-card__prices">
                      <div class="slide-card__prices-aria-">
                        <h3 class="slide-card__price">¥10,000</h3>
                      </div>
                      <div class="slide-card__discounts">
                        <h3 class="slide-card__discount">¥8,000</h3>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="campaign__swiper-next">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/right-arrow.png" alt="右へ" />
      </div>
      <div class="campaign__swiper-prev">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/left-arrow.png" alt="左へ" />
      </div>
      <div class="campaign__button">
        <a href="<?php echo $campaign ?>" class="button">
          View more<span class="button__stickarrow"></span>
        </a>
      </div>
    </div>
  </section>

  <section class="about l-about">
    <div class="about__inner inner">
      <div class="about__title section-title">
        <p class="section-title__main">About us</p>
        <h2 class="section-title__sub">私たちについて</h2>
      </div>
      <div class="about__body">
        <div class="about__img-1">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about.1.jpg" alt="屋根の画像" />
        </div>
        <div class="about__img-2">
          <picture>
            <source media="(max-width: 767px)"
              srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/about.2.jpg" />
            <source media="(min-width: 767px)"
              srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/about.pc2.jpg" />
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about.pc2.jpg" alt="黄色の魚の画像" />
          </picture>
        </div>
        <div class="about__content">
          <div class="about__content-titles">
            <h2 class="about__content-title">
              Dive into
              <br />
              the Ocean
            </h2>
          </div>
          <div class="about__texts">
            <p class="about__text">
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
              <br />
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト<span>が入ります。</span>
            </p>
            <div class="about__button">
              <a href="<?php echo $about ?>" class="button">
                View more<span class="button__stickarrow"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="information l-information">
    <div class="information__inner inner">
      <div class="information__title section-title">
        <p class="section-title__main">information</p>
        <h2 class="section-title__sub">ダイビング情報</h2>
      </div>
      <div class="information__content">
        <div class="information__content-img colorbox">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information.jpg" alt="黄色の魚の画像" />
        </div>
        <div class="information__content-right">
          <div class="information__content-titles">
            <h3 class="information__content-title">ライセンス講習</h3>
          </div>
          <p class="information__content-text">
            当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br />
            正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
          </p>
          <div class="information__button">
            <a href="<?php echo $information ?>" class="button">
              View more<span class="button__stickarrow"></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="blog l-blog">
    <div class="blog__bg-img">
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog.pc.img.jpg" alt="水中の画像" />
    </div>
    <div class="blog__inner inner">
      <div class="blog__title section-title section-title--blog">
        <p class="section-title__main">blog</p>
        <h2 class="section-title__sub">ブログ</h2>
      </div>
      <div class="blog__cards blog-cards">
        <div class="blog-cards__item">
          <a href="" class="blog-card">
            <div class="blog-card__header">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog.1.jpg" alt="サンゴの画像" />
            </div>
            <div class="blog-card__body">
              <p class="blog-card__date">2023.11/17</p>
              <h2 class="blog-card__title">ライセンス取得</h2>
              <p class="blog-card__text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                <br />
                ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
              </p>
            </div>
          </a>
        </div>
        <div class="blog-cards__item">
          <a href="#" class="blog-card">
            <div class="blog-card__header">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog.2.jpg" alt="ウミガメの画像" />
            </div>
            <div class="blog-card__body">
              <p class="blog-card__date">2023.11/17</p>
              <h2 class="blog-card__title">ウミガメと泳ぐ</h2>
              <p class="blog-card__text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                <br />
                ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
              </p>
            </div>
          </a>
        </div>
        <div class="blog-cards__item">
          <a href="#" class="blog-card">
            <div class="blog-card__header">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog.3.jpg" alt="クマノミの画像" />
            </div>
            <div class="blog-card__body">
              <p class="blog-card__date">2023.11/17</p>
              <h2 class="blog-card__title">カクレクマノミ</h2>
              <p class="blog-card__text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                <br />
                ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
              </p>
            </div>
          </a>
        </div>
      </div>
      <div class="blog__button">
        <a href="<?php echo $blog ?>" class="button">
          View more<span class="button__stickarrow"> </span>
        </a>
      </div>
    </div>
  </section>

  <section class="voice l-voice">
    <div class="voice__inner inner">
      <div class="voice__title section-title">
        <p class="section-title__main">Voice</p>
        <h2 class="section-title__sub">お客様の声</h2>
      </div>
      <div class="voice__cards voice-cards">
        <div class="voice-cards__item">
          <a href="#" class="voice-card">
            <div class="voice-card__inner">
              <div class="voice-card__header">
                <div class="voice-card__header-left">
                  <div class="voice-card__age">20代(女性)</div>
                  <div class="voice-card__icon card-icon">ライセンス講習</div>
                  <div class="voice-card__title">
                    ここにタイトルが入ります。ここにタイトル
                  </div>
                </div>
                <div class="voice-card__img colorbox">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice.1.jpg" alt="女性の画像" />
                </div>
              </div>
              <div class="voice-card__body">
                <p class="voice-card__text">
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                  <br />
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                  <br />
                  ここにテキストが入ります。ここにテキストが入ります。
                </p>
              </div>
            </div>
          </a>
        </div>
        <div class="voice-cards__item">
          <a href="#" class="voice-card">
            <div class="voice-card__inner">
              <div class="voice-card__header">
                <div class="voice-card__header-left">
                  <div class="voice-card__age">30代(男性)</div>
                  <div class="voice-card__icon card-icon">ファンダイビング</div>
                  <div class="voice-card__title">
                    ここにタイトルが入ります。ここにタイトル
                  </div>
                </div>
                <div class="voice-card__img colorbox">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice.2.jpg" alt="男性の画像" />
                </div>
              </div>
              <div class="voice-card__body">
                <p class="voice-card__text">
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                  <br />
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                  ここにテキストが入ります。ここにテキストが入ります。
                </p>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="voice__button">
        <a href="<?php echo $voice ?>" class="button">
          View more<span class="button__stickarrow"></span>
        </a>
      </div>
    </div>
  </section>

  <section class="price l-price">
    <div class="price__inner inner">
      <div class="price__title section-title">
        <p class="section-title__main">price</p>
        <h2 class="section-title__sub">料金一覧</h2>
      </div>
      <div class="price__contents">
        <div class="price__contents-left">
          <div class="price__content-fast">
            <div class="price__content-title">ライセンス講習</div>
            <div class="price__items">
              <div class="price__item">
                <div class="price__item-title">
                  オープンウォーターダイバーコース
                </div>
                <div class="price__item-price">¥50,000</div>
              </div>
              <div class="price__item">
                <div class="price__item-title">
                  アドバンスドオープンウォーターコース
                </div>
                <div class="price__item-price">¥60,000</div>
              </div>
              <div class="price__item">
                <div class="price__item-title">レスキュー＋EFRコース</div>
                <div class="price__item-price">¥70,000</div>
              </div>
            </div>
          </div>
          <div class="price__content">
            <div class="price__content-title">体験ダイビング</div>
            <div class="price__items">
              <div class="price__item">
                <div class="price__item-title">
                  ビーチ体験ダイビング(半日)
                </div>
                <div class="price__item-price">¥7,000</div>
              </div>
              <div class="price__item">
                <div class="price__item-title">
                  ビーチ体験ダイビング(1日)
                </div>
                <div class="price__item-price">¥14,000</div>
              </div>
              <div class="price__item">
                <div class="price__item-title">
                  ボート体験ダイビング(半日)
                </div>
                <div class="price__item-price">¥10,000</div>
              </div>
              <div class="price__item">
                <div class="price__item-title">
                  ボート体験ダイビング(1日)
                </div>
                <div class="price__item-price">¥18,000</div>
              </div>
            </div>
          </div>
          <div class="price__content">
            <div class="price__content-title">ファンダイビング</div>
            <div class="price__items">
              <div class="price__item">
                <div class="price__item-title">
                  ビーチダイビング(2ダイブ)
                </div>
                <div class="price__item-price">¥14,000</div>
              </div>
              <div class="price__item">
                <div class="price__item-title">
                  ボートダイビング(2ダイブ)
                </div>
                <div class="price__item-price">¥18,000</div>
              </div>
              <div class="price__item">
                <div class="price__item-title">
                  スペシャルダイビング(2ダイブ)
                </div>
                <div class="price__item-price">¥24,000</div>
              </div>
              <div class="price__item">
                <div class="price__item-title">
                  ナイトダイビング(1ダイブ)
                </div>
                <div class="price__item-price">¥10,000</div>
              </div>
            </div>
          </div>
          <div class="price__content">
            <div class="price__content-title">スペシャルダイビング</div>
            <div class="price__items">
              <div class="price__item">
                <div class="price__item-title">貸切ダイビング(2ダイブ)</div>
                <div class="price__item-price">¥24,000</div>
              </div>
              <div class="price__item">
                <div class="price__item-title">1日ダイビング(3ダイブ)</div>
                <div class="price__item-price">¥32,000</div>
              </div>
            </div>
          </div>
        </div>
        <div class="price__contents-right colorbox">
          <picture>
            <source media="(max-width: 767px)"
              srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/price__sp.jpg" />
            <source media="(min-width: 767px)"
              srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/price__img.1.jpg" />
            <img class="price__img" src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price__img.1.jpg"
              alt="サンゴと赤い魚の画像" />
          </picture>
        </div>
      </div>
      <div class="price__button">
        <a href="<?php echo $price ?>" class="button">
          View more<span class="button__stickarrow"></span>
        </a>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
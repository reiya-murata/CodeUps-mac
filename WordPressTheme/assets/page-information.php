<?php get_header(); ?>
<?php wp_head(); ?>

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

  <main>
    <section class="sub-mv">
      <div class="sub-mv__hero">
        <h1 class="sub-mv__titles page-title">information</h1>
      </div>
      <div class="sub-mv__img js-hero-contents">
        <picture>
          <source media="(max-width: 767px)"
            srcset="<?php echo get_theme_file_uri(); ?>//images/common/information-page-sp.jpg">
          <source media="(min-width: 767px)"
            srcset="<?php echo get_theme_file_uri(); ?>//images/common/information-page-pc.jpg">
          <img src="<?php echo get_theme_file_uri(); ?>/images/common/information-page-pc.jpg" alt=" ダイビングの画像">
        </picture>
      </div>
    </section>


    <?php get_template_part('parts/breadcrumbs')?>

    <section class="information-page-contents l-information-page-contents">
      <div class="information-page-contents__inner inner">
        <div class="information-page-contents__tab-menu">
          <button class="information-page-contents__tab-icon tab-icon--1 active js-tab-menu2"
            data-target="information-page-contents__tab1">ライセンス講習</button>
          <button class="information-page-contents__tab-icon tab-icon--2 js-tab-menu2"
            data-target="information-page-contents__tab2">ファン<br class="pc-hidden"> ダイビング</button>
          <button class="information-page-contents__tab-icon tab-icon--3 js-tab-menu2"
            data-target="information-page-contents__tab3">体験<br class="pc-hidden">ダイビング</button>
        </div>

        <div class="information-page-contents__tabs active js-information-tabbody" id="information-page-contents__tab1">

          <div class="campaign-tab">
            <div class="campaign-tab__left">
              <div class="campaign-tab__title">
                <p>ライセンス講習</p>
              </div>
              <div class="campaign-tab__text">
                <p>
                  泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！
                </p>
              </div>
            </div>
            <div class="campaign-tab__right">
              <img src="<?php echo get_theme_file_uri(); ?>/images/common/license.jpg" alt="ライセンスの画像">
            </div>
          </div>
        </div>


        <div class="information-page-contents__tabs js-information-tabbody" id="information-page-contents__tab2">

          <div class="campaign-tab">
            <div class="campaign-tab__left">
              <div class="campaign-tab__title">
                <p>ファンダイビング</p>
              </div>
              <div class="campaign-tab__text">
                <p>ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
                </p>
              </div>
            </div>
            <div class="campaign-tab__right">
              <img src="<?php echo get_theme_file_uri(); ?>/images/common/fundiving.jpg" alt="ファンダイビングの画像">
            </div>
          </div>
        </div>



        <div class="information-page-contents__tabs js-information-tabbody" id="information-page-contents__tab3">
          <div class="campaign-tab">
            <div class="campaign-tab__left">
              <div class="campaign-tab__title">
                <p>体験ダイビング</p>
              </div>
              <div class="campaign-tab__text">
                <p>ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
                </p>
              </div>
            </div>
            <div class="campaign-tab__right">
              <img src="<?php echo get_theme_file_uri(); ?>/images/common/diving.jpg" alt="ダイビングの画像">
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="contact l-contact">
      <div class="contact__inner inner">
        <div class="contact__card">
          <div class="contact__left">
            <div class="contact__logo-codeups">
              <picture class="logo__contact-codeups">
                <source media="(max-width: 767px)"
                  srcset="<?php echo get_theme_file_uri(); ?>//images/common/CodeUps__bottom-sp.svg" />
                <source media="(min-width: 767px)"
                  srcset="<?php echo get_theme_file_uri(); ?>//images/common/cordUps_blue.svg" />
                <img src="<?php echo get_theme_file_uri(); ?>/images/common/cordUps_blue.svg" alt="cordUpsのロゴ" />
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
                <img src="<?php echo get_theme_file_uri(); ?>/images/common/contact.1.jpg" alt="地図の画像" />
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
              <a href="#" class="button">
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
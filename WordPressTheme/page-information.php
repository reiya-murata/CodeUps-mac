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
  <section class="sub-mv">
    <div class="sub-mv__hero">
      <h1 class="sub-mv__titles page-title">information</h1>
    </div>
    <div class="sub-mv__img js-hero-contents">
      <picture>
        <source media="(max-width: 767px)"
          srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/information-page-sp.jpg">
        <source media="(min-width: 767px)"
          srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/information-page-pc.jpg">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information-page-pc.jpg" alt=" ダイビングの画像">
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
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/license.jpg" alt="ライセンスの画像">
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
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fundiving.jpg" alt="ファンダイビングの画像">
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
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/diving.jpg" alt="ダイビングの画像">
          </div>
        </div>
      </div>
    </div>
  </section>


</main>



<?php get_footer(); ?>
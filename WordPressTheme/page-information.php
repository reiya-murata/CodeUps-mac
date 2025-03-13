<?php get_header(); ?>

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
        <button id="tab-btn1" class="information-page-contents__tab-icon tab-icon--1 active">ライセンス講習</button>
        <button id="tab-btn2" class="information-page-contents__tab-icon tab-icon--2">ファンダイビング</button>
        <button id="tab-btn3" class="information-page-contents__tab-icon tab-icon--3">体験ダイビング</button>
      </div>

      <div id="tab-content1" class="information-page-contents__tabs active">
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

      <div id="tab-content2" class="information-page-contents__tabs">
        <div class="campaign-tab">
          <div class="campaign-tab__left">
            <div class="campaign-tab__title">
              <p>ファンダイビング</p>
            </div>
            <div class="campaign-tab__text">
              <p>ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！</p>
            </div>
          </div>
          <div class="campaign-tab__right">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fundiving.jpg" alt="ファンダイビングの画像">
          </div>
        </div>
      </div>

      <div id="tab-content3" class="information-page-contents__tabs">
        <div class="campaign-tab">
          <div class="campaign-tab__left">
            <div class="campaign-tab__title">
              <p>体験ダイビング</p>
            </div>
            <div class="campaign-tab__text">
              <p>ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！</p>
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
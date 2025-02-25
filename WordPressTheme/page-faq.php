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
      <h1 class="sub-mv__titles page-title">FAQ</h1>
    </div>
    <div class="sub-mv__main-img js-hero-contents">
      <picture>
        <source media="(max-width: 767px)" srcset="<?php echo get_theme_file_uri(); ?>//images/common/FAQ-sp2.jpg">
        <source media="(min-width: 767px)" srcset="<?php echo get_theme_file_uri(); ?>//images/common/FAQ-pc1.jpg">
        <img src="<?php echo get_theme_file_uri(); ?>/images/common/FAQ-pc1.jpg" alt=" 砂浜の画像">
      </picture>
    </div>
  </section>

  <?php get_template_part('parts/breadcrumbs')?>

  <section class="faq-contents  l-faq-contents">
    <div class="faq-contents__inner inner--sub">

      <?php
            // 現在の投稿のIDを取得
            $post_id = get_the_ID();
            // SCFプラグインを使ってカスタムフィールドグループを取得
            $faq_list = SCF::get('faq_list', $post_id);
            if (!empty($faq_list)) :
                foreach ($faq_list as $faq_list) :
                    $faq_question = $faq_list['question'];
                    $faq_answer = $faq_list['answer'];
                    // 質問と回答が両方存在する場合のみ表示
                    if (!empty($faq_question) && !empty($faq_answer)) :
            ?>




      <div class="faq-content">
        <div class="faq-content__question active js-modal">
          <p>
            <?php echo esc_html($faq_question); ?></p>
          <div class="faq-content-lines">
            <span class="faq-content__line1"></span>
            <span class="faq-content__line2 active"></span>
          </div>
        </div>
        <div class="faq-content__answer active js-faq-content">
          <p>
            <?php echo nl2br(esc_html($faq_answer)); ?>
          </p>
        </div>
      </div>
      <?php
                    endif;
                  endforeach;
            else :
                echo '<p>No FAQ items found.</p>';
            endif;
            ?>

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
          <div class="contact__title">
            <div class="section-title section-title--contact">
              <p class="section-title__main">contact</p>
              <h2 class="section-title__sub">お問い合わせ</h2>
            </div>
          </div>
          <h3 class="contact__sub section-title__sub">
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

<?php wp_footer(); ?>
<?php get_footer(); ?>
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
      <h1 class="sub-mv__titles page-title">contact</h1>
    </div>
    <div class="sub-mv__img js-hero-contents">
      <picture>
        <source media="(max-width: 767px)"
          srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/contact-page-sp1.jpg">
        <source media="(min-width: 767px)"
          srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/contact-pc.jpg">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/contact-pc.jpg" alt=" 砂浜の画像">
      </picture>
    </div>
  </section>

  <?php get_template_part('parts/breadcrumbs')?>
  <section class="thanks-page__inner inner">
    <div class=" thanks-page-top__contents">
      <div class="thanks-page-top__content1">
        <p>お問い合わせ内容を送信完了しました。</p>
      </div>
      <div class="thanks-page-top__content2">このたびは、お問い合わせ頂き<br class="thanks-page-top__content-sp">
        誠にありがとうございます。<br>
        お送り頂きました内容を確認の上、<br class="thanks-page-top__content-sp">3営業日以内に折り返しご連絡させて頂きます。<br>
        また、ご記入頂いたメールアドレスへ、<br class="thanks-page-top__content-sp">自動返信の確認メールをお送りしております。</div>
    </div>

  </section>




</main>


<?php get_footer(); ?>
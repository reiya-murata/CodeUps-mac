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
      <h1 class="sub-mv__titles page-title">FAQ</h1>
    </div>
    <div class="sub-mv__main-img js-hero-contents">
      <picture>
        <source media="(max-width: 767px)"
          srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/FAQ-sp2.jpg">
        <source media="(min-width: 767px)"
          srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/FAQ-pc1.jpg">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/FAQ-pc1.jpg" alt=" 砂浜の画像">
      </picture>
    </div>
  </section>

  <?php get_template_part('parts/breadcrumbs')?>

  <?php
// 現在の投稿のIDを取得
$post_id = get_the_ID();
// SCFプラグインを使ってカスタムフィールドグループを取得
$faq_list = SCF::get('faq_list', $post_id);
if (!empty($faq_list)) : // faq_listが空でない場合のみ表示
?>
  <section class="faq-contents l-faq-contents">
    <div class="faq-contents__inner inner--sub">
      <?php
        foreach ($faq_list as $faq_item) :
          $faq_question = $faq_item['question'];
          $faq_answer = $faq_item['answer'];
          // 質問と回答が両方存在する場合のみ表示
          if (!empty($faq_question) && !empty($faq_answer)) :
      ?>
      <div class="faq-contents__item">
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
      </div>

      <?php
        endif;
        endforeach;
      ?>
    </div>
  </section>
  <?php
else :
  // FAQがない場合の処理（オプションでメッセージを表示する）
  echo '<p>FAQは現在ありません。</p>';
endif;
?>


</main>

<?php get_footer(); ?>
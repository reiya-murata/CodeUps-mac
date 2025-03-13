<?php get_header(); ?>

<main>
  <section class="sub-mv">
    <div class="sub-mv__hero">
      <h1 class="sub-mv__titles page-title">about us</h1>
    </div>
    <div class="sub-mv__img js-hero-contents">
      <picture>
        <source media="(max-width: 767px)"
          srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/aboutus-img-sp.jpg">
        <source media="(min-width: 767px)"
          srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/aboutus-img.jpg">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/aboutus-img.jpg" alt="シーサーの画像">
      </picture>
    </div>
  </section>

  <?php get_template_part('parts/breadcrumbs')?>

  <section class="about-page l-about-page">
    <div class="about-page__inner inner">
      <div class="about-page__img-1">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about.1.jpg" alt="屋根の画像" />
      </div>
      <div class="about-page__img-2">
        <picture>
          <source media="(max-width: 767px)"
            srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/about.pc2.jpg">
          <source media="(min-width: 767px)"
            srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/about.pc2.jpg">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about.pc2.jpg" alt="黄色の魚の画像" />
        </picture>
      </div>
      <div class="about-page__content">
        <div class="about-page__content-titles">
          <h2 class="about-page__content-title">
            Dive into
            <br />
            the Ocean
          </h2>
        </div>
        <div class="about-page__texts">
          <p class="about-page__text">
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
            <br />
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト<span>が入ります。</span>
          </p>
        </div>
      </div>
    </div>
  </section>

  <?php
  // 'page-about-us' のページを取得
  $page_about_us = get_page_by_path('about-us');
  // ページが見つかった場合
  if ($page_about_us) :
    // 'about-us' ページの投稿IDを取得
    $post_id = $page_about_us->ID;
    // SCF から 'gallery__imgs' グループフィールドを取得
    $gallery = SCF::get('gallery__imgs', $post_id);
    // ギャラリーが存在する場合のみ表示
    if ($gallery) :
  ?>
  <section class="gallery l-gallery">
    <div class="gallery__inner inner">
      <div class="gallery__title section-title">
        <p class="section-title__main">gallery</p>
        <h2 class="section-title__sub">フォト</h2>
      </div>
      <div class="gallery__imgs">
        <?php
        // ギャラリー内の各画像をループで表示
        foreach ($gallery as $image) :
          // 画像IDを取得
          $image_id = $image['gallery__img']; // 'gallery__img' はフィールドのキー名
          // 画像IDから画像URLを取得
          $image_url = wp_get_attachment_url($image_id);
          // 画像URLが存在する場合のみ表示
          if ($image_url) :
      ?>
        <div class="gallery__img">
          <img src="<?php echo esc_url($image_url); ?>" alt="Gallery Image" class="gallery__img-item" />
        </div>
        <?php
          endif;
        endforeach;
      ?>
        <!-- モーダル部分 -->
        <div id="imageModal" class="gallery__modal">
          <img class="gallery__modal-content" id="modalImage" alt="拡大画像" />
          <div id="caption"></div>
        </div>
      </div>
    </div>
  </section>
  <?php
    endif;
  endif;
?>


</main>


<?php get_footer(); ?>
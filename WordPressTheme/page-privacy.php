<?php get_header(); ?>

<main>
  <section class="sub-mv">
    <div class="sub-mv__hero">
      <h1 class="sub-mv__titles page-title">privacy Policy</h1>
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

  <section class="privacy-contents l-privacy-contents ">
    <div class="privacy-contents__inner inner--sub">
      <div class="privacy-contents__title">
        <p>プライバシーポリシー</p>
      </div>
      <div class="privacy-contents__text">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
      </div>
    </div>
  </section>
  <?php endwhile;
    else :
      echo '<p>投稿が見つかりませんでした。</p>';
  endif; ?>

</main>

<?php get_footer(); ?>
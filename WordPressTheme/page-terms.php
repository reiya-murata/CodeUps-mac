<?php get_header(); ?>

<main>
  <section class="sub-mv">
    <div class="sub-mv__hero">
      <h1 class="sub-mv__titles page-title">terms of Service</h1>
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

  <section class=" terms-contents l-terms-contents">
    <div class="terms-contents__inner inner">
      <div class="terms-contents__title">
        <p>利用規約</p>
      </div>
      <div class=" terms-contents__text">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?> <?php the_content(); ?> </div>
    </div>
  </section>
  <?php endwhile;
    else :
      echo '<p>投稿が見つかりませんでした。</p>';
  endif; 
  ?>
  </div>
  </div>
  </section>

</main>

<?php get_footer(); ?>
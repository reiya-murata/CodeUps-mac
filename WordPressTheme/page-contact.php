<?php get_header(); ?>
<?php wp_head(); ?>


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

  <section class="contact-page-contents l-contact-page-contents">
    <div class="contact-page-contents__inner inner">
      <?php echo do_shortcode('[contact-form-7 id="5d871dd" title="コンタクトフォーム 1"]'); ?>
    </div>

  </section>




</main>

<?php wp_footer();?>
<?php get_footer(); ?>
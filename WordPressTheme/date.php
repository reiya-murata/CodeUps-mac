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
      <h1 class="sub-mv__hero-titles page-title">blog</h1>
    </div>
    <div class="sub-mv__img js-hero-contents">
      <picture>
        <source media="(max-width: 767px)"
          srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-page-sp.jpg">
        <source media="(min-width: 767px)"
          srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-page-pc.jpg">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-page-pc.jpg" alt=" 魚の群れの画像">
      </picture>
    </div>

  </section>
  <?php get_template_part('parts/breadcrumbs')?>

  <section class="blog-page-contents l-blog-page-contents">
    <div class="blog-page-contents__inner inner">

      <div class="blog-page-contents__cards blog-cards blog-cards--2clum">
        <?php if (have_posts()): 
        while (have_posts()):
        the_post(); ?>
        <div class="blog-cards__item">
          <a href="<?php the_permalink(); ?>" class="blog-card">
            <div class="blog-card__header">
              <?php if(get_the_post_thumbnail()):
            ?>
              <img src="<?php the_post_thumbnail_url('full'); ?> " alt=" <?php the_title(); ?>の画像" />
              <?php else: ?>
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="noimage">
              <?php endif; ?>
            </div>
            <div class=" blog-card__body">
              <time datetime="<?php the_time("c");?>" class="blog-card__date blog-card__date--blog-page">
                <?php the_time('Y.m/d'); ?> </time>
              <h2 class="blog-card__title">
                <?php the_title(); ?>
              </h2>
              </h2>
              <p class=" blog-card__text">
                <?php the_content(); ?>
              </p>
            </div>
          </a>
        </div>
        <?php endwhile; endif; ?>
      </div>


      <div class="blog-page__wp-pagenavi ">
        <?php wp_pagenavi(); ?>

      </div>
      <?php get_sidebar(); ?>

    </div>
  </section>


</main>



<?php get_footer(); ?>
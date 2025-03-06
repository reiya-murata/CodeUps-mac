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
      <h1 class="sub-mv__titles page-title">blog</h1>
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

  <section class="blog-detail-contents l-blog-detail-contents">
    <div class="blog-detail-contents__inner inner">
      <?php if (have_posts()):
      while (have_posts()):
        the_post(); ?>
      <div class="blog-detail-content">
        <div class="blog-detail__content">
          <time datetime="<?php the_time('c'); ?>" class="blog-detail__date blog-detail-date">
            <?php the_time('Y.m/d'); ?></time>
          <div class="blog-detail-title">
            <h2>
              <?php the_title(); ?>
            </h2>
          </div>
          <div class="blog-detail__content-img">
            <?php if(get_the_post_thumbnail()):
            ?>
            <img src="<?php the_post_thumbnail_url('full'); ?> " alt=" <?php the_title(); ?>の画像" />
            <?php else: ?>
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="noimage">
            <?php endif; ?>
          </div>
          <div class="blog-detail__text">
            <?php the_content(); ?>
          </div>
          <div class="blog-detail__button">
            <?php
            $prev = get_previous_post(true); // 同じ投稿タイプのみに限定
            $next = get_next_post(true);
            ?>
            <?php if ($prev): ?>
            <a class="previouspostslink" href="<?php echo esc_url(get_permalink($prev->ID)); ?>">＜</a>
            <?php endif; ?>
            <?php if ($next): ?>
            <a class="nextpostslink" href="<?php echo esc_url(get_permalink($next->ID)); ?>">＞</a>
            <?php endif; ?>
            <?php endwhile; endif; ?>
          </div>
        </div>
        <div class="blog-page-contents__sidebar">
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
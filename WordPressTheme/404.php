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
  <section class="page-404">

    <?php get_template_part('parts/breadcrumbs'); ?>

    <section class="page-404-contents l-page-404-contents">
      <div class="page-404-contents__inner inner">
        <div class="page-404-contents__title">
          <p>404</p>
        </div>
        <div class="page-404-contents__text">
          申し訳ありません。<br>
          お探しのページが見つかりません。
        </div>
        <div class="page-404-contents__button">
          <a href="<?php echo home_url(); ?>" class="button button--white">
            Page TOP<span class="button__stickarrow button__stickarrow--white"></span>
          </a>
        </div>
      </div>
    </section>

  </section>

</main>

<?php get_footer(); ?>
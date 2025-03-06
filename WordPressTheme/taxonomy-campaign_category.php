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
      <h1 class="sub-mv__title page-title">
        Campaign</h1>
    </div>
    <div class="sub-mv__img js-hero-contents">
      <picture>
        <source media="(max-width: 767px)"
          srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign-img2.jpg">
        <source media="(min-width: 767px)"
          srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign-img.jpg">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign-img.jpg" alt="キャンペーン画像">
      </picture>
    </div>
  </section>

  <?php get_template_part('parts/breadcrumbs'); ?>

  <section class="campaign-page-contents l-campaign-page-contents">
    <div class="campaign-page-contents__inner inner">
      <div class="campaign-page-contents__tab-menu tab-menus">

        <a href="<?php echo esc_url(home_url('/campaign/')); ?>"
          class="tab-menu <?php if (!is_tax('campaign_category')) echo 'active'; ?>">ALL</a>

        <?php if (taxonomy_exists('campaign_category')): 
        $parent_terms = get_terms(array(
        'taxonomy'   => 'campaign_category',
        'hide_empty' => false,
        'parent'     => 0,
        ));
        if (!empty($parent_terms) && !is_wp_error($parent_terms)): 
        foreach ($parent_terms as $parent_term): 
            $child_terms = get_terms(array(
                'taxonomy'   => 'campaign_category',
                'hide_empty' => false,
                'parent'     => $parent_term->term_id,
            ));
            if (!empty($child_terms) && !is_wp_error($child_terms)): 
              foreach ($child_terms as $term): ?>
        <a href="<?php echo esc_url(get_term_link($term)); ?>"
          class="tab-menu <?php echo (get_queried_object_id() === $term->term_id) ? 'active' : ''; ?>">
          <?php echo esc_html($term->name); ?>
        </a>
        <?php endforeach; 
            endif;
          endforeach; 
        endif;
        else: ?>
        <p>タクソノミー "campaign_category" が登録されていません。</p>
        <?php endif; ?>
      </div>
      <div class="campaign-slides campaign-slide-campaign-page">
        <?php if (have_posts()):
        while(have_posts()):
          the_post();
        ?>
        <div class="campaign-slide-card">
          <div class="campaign-slide-card__header">
            <?php if (has_post_thumbnail()): ?>
            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>の画像" />
            <?php else: ?>
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="noimage">
            <?php endif; ?>
          </div>
          <div class="campaign-slide-card__body">
            <?php if (get_field('campaign-1')): ?>
            <div class="campaign-slide-card__icon card-icon">
              <h2 class="campaign-slide-card__icon-title">
                <?php
                $value = get_field('campaign-1');
                if (is_array($value) && isset($value[0]) && $value[0] instanceof WP_Term) {
                    echo esc_html($value[0]->name);
                } elseif (!empty($value)) {
                    echo esc_html($value);
                } else {
                    echo 'データがありません';
                }
                ?>
              </h2>
            </div>
            <?php endif; ?>
            <div class="campaign-slide-card__title-campaign">
              <h2><?php the_title(); ?></h2>
            </div>
            <p class="campaign-slide-card__text-campaign">全部コミコミ(お一人様)</p>
            <div class="campaign-slide-card__prices">
              <div class="campaign-slide-card__prices-aria">
                <?php if (get_field('campaign-2')): ?>
                <h3 class="campaign-slide-card__price"><?php the_field('campaign-2'); ?></h3>
                <?php endif; ?>
              </div>
              <div class="campaign-slide-card__discounts">
                <?php if (get_field('campaign-3')): ?>
                <h3 class="campaign-slide-card__discount"><?php the_field('campaign-3'); ?></h3>
                <?php endif; ?>
              </div>
            </div>
            <div class="campaign-slide-card__text-about">
              <?php if (get_field('campaign-4')): ?>
              <p><?php the_field('campaign-4'); ?></p>
              <?php endif; ?>
            </div>
            <?php if (get_field('campaign-5')): ?>
            <div class="campaign-slide-card__date">
              <p><?php the_field('campaign-5'); ?></p>
            </div>
            <?php endif; ?>
            <div class="campaign-slide-card__contact">
              <p>ご予約・お問い合わせはコチラ</p>
            </div>
            <div class="campaign-slide-card__button">
              <a href="<?php echo $contact; ?>" class="button">
                View more<span class="button__stickarrow"></span>
              </a>
            </div>
          </div>
        </div>
        <?php endwhile; wp_reset_postdata(); ?>
        <?php else : ?>
        <p>キャンペーン情報はまだありません。</p>
        <?php endif; ?>
      </div>
      <div class="campaign-page-contents__button">
        <?php wp_pagenavi();?>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
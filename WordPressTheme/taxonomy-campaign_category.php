<?php get_header(); ?>

<?php 
$contact = esc_url(home_url('/contact/'));
?>

<main>
  <section class="sub-mv">
    <div class="sub-mv__hero">
      <h1 class="sub-mv__title page-title">Campaign</h1>
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
            foreach ($parent_terms as $term): ?>
        <a href="<?php echo esc_url(get_term_link($term)); ?>"
          class="tab-menu <?php echo (get_queried_object_id() === $term->term_id) ? 'active' : ''; ?>">
          <?php echo esc_html($term->name); ?>
        </a>
        <?php endforeach; 
          endif;
        else: ?>
        <p>タクソノミー "campaign_category" が登録されていません。</p>
        <?php endif; ?>
      </div>

      <div class="campaign-slides campaign-slide-campaign-page">
        <?php if (have_posts()):
          while(have_posts()): the_post(); ?>
        <div class="campaign-slide-card">
          <div class="campaign-slide-card__header">
            <?php if (has_post_thumbnail()): ?>
            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title_attribute(); ?>の画像" />
            <?php else: ?>
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="画像なし">
            <?php endif; ?>
          </div>

          <div class="campaign-slide-card__body">
            <?php 
                  $terms = get_the_terms(get_the_ID(), 'campaign_category');
                  if ($terms && !is_wp_error($terms)): ?>
            <div class="campaign-slide-card__icon card-icon">
              <h2 class="campaign-slide-card__icon-title">
                <?php
// 投稿に紐づいた campaign_category を取得
        $terms = get_the_terms(get_the_ID(), 'campaign_category');

        if (!empty($terms) && !is_wp_error($terms)) {
        echo '<ul class="campaign-categories">';
        foreach ($terms as $term) {
        echo '<li>' . esc_html($term->name) . '</li>';
        }
        echo '</ul>';
        } else {
        echo '<p>カテゴリ情報がありません。</p>';
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
              <?php if (get_field('campaign-2')): ?>
              <div class="campaign-slide-card__prices-aria">
                <h3 class="campaign-slide-card__price"><?php the_field('campaign-2'); ?></h3>
              </div>
              <?php endif; ?>

              <?php if (get_field('campaign-3')): ?>
              <div class="campaign-slide-card__discounts">
                <h3 class="campaign-slide-card__discount"><?php the_field('campaign-3'); ?></h3>
              </div>
              <?php endif; ?>
            </div>

            <?php if (get_field('campaign-4')): ?>
            <div class="campaign-slide-card__text-about">
              <p><?php the_field('campaign-4'); ?></p>
            </div>
            <?php endif; ?>

            <?php if (get_field('campaign-5') || get_field('campaign-6')): ?>
            <div class="campaign-slide-card__date">
              <p>
                <?php if (get_field('campaign-5')): ?>
                <?php the_field('campaign-5'); ?> -
                <?php endif; ?>
                <?php if (get_field('campaign-6')): ?>
                <?php the_field('campaign-6'); ?>
                <?php endif; ?>
              </p>
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
        <?php else: ?>
        <p>キャンペーン情報はまだありません。</p>
        <?php endif; ?>
      </div>

      <div class="campaign-page-contents__button">
        <?php wp_pagenavi(); ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
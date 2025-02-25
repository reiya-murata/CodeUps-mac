<?php get_header(); ?>
<?php wp_head(); ?>

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
        <source media="(max-width: 767px)" srcset="<?php echo get_theme_file_uri(); ?>/images/common/campaign-img2.jpg">
        <source media="(min-width: 767px)" srcset="<?php echo get_theme_file_uri(); ?>/images/common/campaign-img.jpg">
        <img src="<?php echo get_theme_file_uri(); ?>/images/common/campaign-img.jpg" alt="キャンペーン画像">
      </picture>
    </div>
  </section>

  <?php get_template_part('parts/breadcrumbs'); ?>

  <section class="campaign-page-contents l-campaign-page-contents">
    <div class="campaign-page-contents__inner inner">
      <div class="campaign-page-contents__tab-menu tab-menus">

        <?php
    // タクソノミー 'campaign_category' のタームを取得
    $terms = get_terms(array(
        'taxonomy' => 'campaign_category',
        'hide_empty' => false,
    ));

    if (!is_wp_error($terms)) {
        foreach ($terms as $term): ?>
        <a href="<?php echo esc_url(get_term_link($term)); ?>"
          class="tab-menu <?php if (is_tax('campaign_category', $term->slug)) echo 'active'; ?>">
          <?php echo esc_html($term->name); ?>
        </a>
        <?php endforeach;
    } ?>
      </div>


      <div class="campaign-slides campaign-slide-campaign-page">
        <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1; // 現在のページ番号を取得

        $queried_object = get_queried_object();
        $term_slug = isset($queried_object->slug) ? $queried_object->slug : '';

        $args = array(
            'post_type'      => 'campaign',
            'posts_per_page' => 4,
            'paged'          => $paged, // ページネーション対応
            'tax_query'      => array(
                array(
                    'taxonomy' => 'campaign_category',
                    'field'    => 'slug',
                    'terms'    => $term_slug,
                ),
            ),
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) :
          while ($query->have_posts()) : $query->the_post();
        ?>

        <div class="campaign-slide-card">
          <div class="campaign-slide-card__header">
            <?php if (has_post_thumbnail()): ?>
            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>の画像" />
            <?php else: ?>
            <img src="<?php echo get_theme_file_uri(); ?>/images/common/noimage.jpg" alt="noimage">
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

      <div class="campaign-page-contents__button wp-pagenavi">
        <?php 
        if (function_exists('wp_pagenavi')) {
            wp_pagenavi(array('query' => $query));
        }
        ?>
      </div>
    </div>
  </section>

  <section class="contact l-contact">
    <div class="contact__inner inner">
      <div class="contact__card">
        <div class="contact__left">
          <div class="contact__logo-codeups">
            <picture class="logo__contact-codeups">
              <source media="(max-width: 767px)"
                srcset="<?php echo get_theme_file_uri(); ?>//images/common/CodeUps__bottom-sp.svg" />
              <source media="(min-width: 767px)"
                srcset="<?php echo get_theme_file_uri(); ?>//images/common/cordUps_blue.svg" />
              <img src="<?php echo get_theme_file_uri(); ?>/images/common/cordUps_blue.svg" alt="cordUpsのロゴ" />
            </picture>
          </div>
          <div class="contact__left-address">
            <div class="contact__contents">
              <p class="contact__content">
                沖縄県那覇市1-1 <br />
                TEL:0120-000-0000 <br />
                営業時間:8:30-19:00 <br />
                定休日:毎週火曜日
              </p>
            </div>

            <div class="contact__map">
              <img src="<?php echo get_theme_file_uri(); ?>/images/common/contact.1.jpg" alt="地図の画像" />
            </div>
          </div>
        </div>

        <div class="contact__right">
          <div class="contact__title section-title--contact">
            <p class="section-title__main">contact</p>
            <h2 class="section-title__sub">お問い合わせ</h2>
          </div>
          <h3 class="section-title__sub contact__sub">
            ご予約・お問い合わせはコチラ
          </h3>
          <div class="contact__button">
            <a href="<?php echo $contact?>" class="button">
              Contact us<span class="button__stickarrow"></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php wp_footer(); ?>
<?php get_footer(); ?>
<?php get_header(); ?>

<?php 
$contact = esc_url(home_url('/contact/'));
?>


<main>
  <section class="sub-mv">
    <div class="sub-mv__hero">
      <h1 class="sub-mv__title page-title">campaign</h1>
    </div>
    <div class="sub-mv__img js-hero-contents">
      <picture>
        <source media="(max-width: 767px)"
          srcset="<?php echo get_theme_file_uri('/assets/images/common/campaign-img2.jpg'); ?>">
        <source media="(min-width: 767px)"
          srcset="<?php echo get_theme_file_uri('/assets/images/common/campaign-img.jpg'); ?>">
        <img src="<?php echo get_theme_file_uri('/assets/images/common/campaign-img.jpg'); ?>" alt="キンギョハナダイの画像">
      </picture>
    </div>
  </section>

  <?php get_template_part('parts/breadcrumbs'); ?>

  <section class="campaign-page-contents l-campaign-page-contents">
    <div class="campaign-page-contents__inner inner">
      <div class="campaign-page-contents__tab-menu tab-menus">
        <!-- ALLタブ -->
        <a href="<?php echo esc_url(home_url('/campaign/')); ?>"
          class="tab-menu <?php if (!is_tax('campaign_category')) echo 'active'; ?>">ALL</a>
        <?php if (taxonomy_exists('campaign_category')): 
        $terms = get_terms(array(
        'taxonomy'   => 'campaign_category',
        'hide_empty' => false,
    ));
    if (!empty($terms) && !is_wp_error($terms)): 
        foreach ($terms as $term):
          if ($term->parent === 0) continue; // 親タームはスキップ
          $term_link = get_term_link($term);
          ?>
        <a href="<?php echo esc_url($term_link); ?>"
          class="tab-menu <?php if (is_tax('campaign_category', $term->term_id)) echo 'active'; ?>">
          <?php echo esc_html($term->name); ?>
        </a>
        <?php endforeach; 
        endif;
        else: ?>
        <p>タクソノミー "campaign_category" が登録されていません。</p>
        <?php endif; ?>
      </div>
      <!-- Slides -->
      <div class="campaign-slides campaign-slide-campaign-page">
        <?php if (have_posts()):
            while(have_posts()):
                the_post();
        ?>
        <div class="campaign-slide-card">
          <div class="campaign-slide-card__header">
            <?php if(get_the_post_thumbnail()): ?>
            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>の画像" />
            <?php else: ?>
            <img src="<?php echo get_theme_file_uri('/assets/images/common/noimage.jpg'); ?>" alt="noimage">
            <?php endif; ?>
          </div>
          <div class="campaign-slide-card__body">
            <?php 
            $terms = get_field('campaign-1'); // ACFのタクソノミーフィールド
            if ($terms && is_array($terms)): ?>
            <div class="campaign-slide-card__icon card-icon">
              <h2 class="campaign-slide-card__icon-title">
                <?php foreach ($terms as $term) {
                      echo esc_html($term->name) . '<br>';
                  } ?>
              </h2>
            </div>
            <?php endif; ?>
            <div class="campaign-slide-card__title-campaign">
              <h2><?php the_title(); ?></h2>
            </div>
            <p class="campaign-slide-card__text-campaign">全部コミコミ(お一人様)</p>
            <div class="campaign-slide-card__prices">
              <div class="campaign-slide-card__prices-aria">
                <?php if ($price = get_field('campaign-2')): ?>
                <h3 class="campaign-slide-card__price"><?php echo esc_html($price); ?></h3>
                <?php endif; ?>
              </div>
              <div class="campaign-slide-card__discounts">
                <?php if ($discount = get_field('campaign-3')): ?>
                <h3 class="campaign-slide-card__discount"><?php echo esc_html($discount); ?></h3>
                <?php endif; ?>
              </div>
            </div>
            <div class="campaign-slide-card__text-about">
              <?php if ($description = get_field('campaign-4')): ?>
              <p><?php echo esc_html($description); ?></p>
              <?php endif; ?>
            </div>
            <?php if ($date = get_field('campaign-5')): ?>
            <div class="campaign-slide-card__date">
              <p><?php echo esc_html($date); ?></p>
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
        <?php endwhile; endif; ?>
      </div>
      <div class="campaign-page-contents__button">
        <?php wp_pagenavi(); ?>
      </div>
    </div>
  </section>

</main>


<?php get_footer(); ?>
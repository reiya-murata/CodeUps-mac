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

        <?php
        if (taxonomy_exists('campaign_category')) {
            // 親ターム（最上位のターム）を取得
            $parent_terms = get_terms(array(
                'taxonomy'   => 'campaign_category',
                'hide_empty' => false,
                'parent'     => 0,
            ));

            if (!empty($parent_terms) && !is_wp_error($parent_terms)) {
                foreach ($parent_terms as $parent_term) {
                    // 子タームを取得
                    $child_terms = get_terms(array(
                        'taxonomy'   => 'campaign_category',
                        'hide_empty' => false,
                        'parent'     => $parent_term->term_id,
                    ));

                    if (!empty($child_terms) && !is_wp_error($child_terms)) {
                        foreach ($child_terms as $term) {
                            $term_link = get_term_link($term);
                            ?>
        <a href="<?php echo esc_url($term_link); ?>"
          class="tab-menu <?php if (is_tax('campaign_category', $term->term_id)) echo 'active'; ?>">
          <?php echo esc_html($term->name); ?>
        </a>
        <?php
                        }
                    }
                }
            }
        } else {
            echo '<p>タクソノミー "campaign_category" が登録されていません。</p>';
        }
        ?>
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

  <section class="contact l-contact">
    <div class="contact__inner inner">
      <div class="contact__card">
        <div class="contact__left">
          <div class="contact__logo-codeups">
            <picture class="logo__contact-codeups">
              <source media="(max-width: 767px)"
                srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/CodeUps__bottom-sp.svg" />
              <source media="(min-width: 767px)"
                srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/cordUps_blue.svg" />
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/cordUps_blue.svg" alt="cordUpsのロゴ" />
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
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/contact.1.jpg" alt="地図の画像" />
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


<?php get_footer(); ?>
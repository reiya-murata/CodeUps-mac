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

<?php 
// ACFのフィールドを使っている場合
$voice_1 = get_field('voice_1'); 
$voice_2 = get_field('voice_2'); 
$voice_3 = get_field('voice_3'); 
?>
<main>
  <section class="sub-mv">
    <div class="sub-mv__hero">
      <h1 class="sub-mv__titles page-title">voice</h1>
    </div>
    <div class="sub-mv__img js-hero-contents">
      <picture>
        <source media="(max-width: 767px)"
          srcset="<?php echo get_theme_file_uri(); ?>//images/common/voice-page-sp.jpg">
        <source media="(min-width: 767px)"
          srcset="<?php echo get_theme_file_uri(); ?>//images/common/voice-page-pc.jpg">
        <img src="<?php echo get_theme_file_uri(); ?>/images/common/voice-page-pc.jpg" alt=" ダイバーの画像">
      </picture>
    </div>
  </section>

  <?php get_template_part('parts/breadcrumbs')?>

  <section class="voice-page-contents l-voice-page-contents">
    <div class="voice-page-contents__inner inner">
      <div class="voice-page-contents__tab-menu tab-menus">
        <a href="<?php echo esc_url(home_url('/voice/')); ?>"
          class="tab-menu <?php if (!is_tax('voice_category')) echo 'active'; ?>">ALL</a>

        <?php
        if (taxonomy_exists('voice_category')) {
            $parent_terms = get_terms(array(
                'taxonomy'   => 'voice_category',
                'hide_empty' => false,
                'parent'     => 0,
            ));

            if (!empty($parent_terms) && !is_wp_error($parent_terms)) {
                foreach ($parent_terms as $parent_term) {
                    $child_terms = get_terms(array(
                        'taxonomy'   => 'voice_category',
                        'hide_empty' => false,
                        'parent'     => $parent_term->term_id,
                    ));

                    if (!empty($child_terms) && !is_wp_error($child_terms)) {
                        foreach ($child_terms as $term) {
                            $term_link = get_term_link($term);
                            ?>
        <a href="<?php echo esc_url(get_term_link($term)); ?>"
          class="tab-menu <?php echo (get_queried_object_id() === $term->term_id) ? 'active' : ''; ?>">
          <?php echo esc_html($term->name); ?>
        </a>

        <?php
                        }
                    }
                }
            }
        } else {
            echo '<p>タクソノミー "voice_category" が登録されていません。</p>';
        }
        ?>
      </div>

      <div class="voice-page-contents__cards voice-cards">
        <?php if (have_posts()):
        while(have_posts()):
          the_post();
        ?>
        <div class="voice-cards__item ">
          <a href="#" class="voice-card">
            <div class="voice-card__inner">
              <div class="voice-card__header">
                <div class="voice-card__header-left">
                  <?php if ($voice_1 || $voice_2): ?>
                  <div class="voice-card__age">
                    <?php if ($voice_1): ?>
                    <?php echo esc_html($voice_1); ?>
                    <?php endif; ?>
                    <?php if ($voice_2): ?>
                    (<?php echo esc_html($voice_2); ?>)
                    <?php endif; ?>
                  </div>
                  <?php endif; ?>

                  <div class="voice-card__icon card-icon">
                    <?php 
                      $terms = get_the_terms(get_the_ID(), 'voice_category');
                      if (!empty($terms) && !is_wp_error($terms)):
                        foreach ($terms as $term):
                          echo esc_html($term->name);
                          break;
                        endforeach;
                      endif;
                    ?>
                  </div>

                  <div class="voice-card__title">
                    <?php the_title(); ?>
                  </div>
                </div>

                <div class="voice-card__img colorbox">
                  <?php if (get_the_post_thumbnail()): ?>
                  <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>の画像" />
                  <?php else: ?>
                  <img src="<?php echo get_theme_file_uri(); ?>/images/common/noimage.jpg" alt="noimage">
                  <?php endif; ?>
                </div>
              </div>

              <div class="voice-card__body">
                <p class="voice-card__text">
                  <?php if ($voice_3): ?>
                  <?php echo esc_html($voice_3); ?>
                  <?php else: ?>
                  ここにテキストが入ります。
                  <?php endif; ?>
                </p>
              </div>
            </div>
          </a>
        </div>
        <?php endwhile; endif; ?>
      </div>

      <div class="voice-page-contents__wp-pagenavi wp-pagenavi">
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
<?php wp_footer();?>
<?php get_footer(); ?>
<?php get_header(); ?>

<main>
  <section class="sub-mv">
    <div class="sub-mv__hero">
      <h1 class="sub-mv__titles page-title">voice</h1>
    </div>
    <div class="sub-mv__img js-hero-contents">
      <picture>
        <source media="(max-width: 767px)"
          srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice-page-sp.jpg">
        <source media="(min-width: 767px)"
          srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice-page-pc.jpg">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice-page-pc.jpg" alt="ダイバーの画像">
      </picture>
    </div>
  </section>

  <?php get_template_part('parts/breadcrumbs')?>

  <section class="voice-page-contents l-voice-page-contents">
    <div class="voice-page-contents__inner inner">
      <div class="voice-page-contents__tab-menu tab-menus">
        <a href="<?php echo esc_url(home_url('/voice/')); ?>"
          class="tab-menu <?php if (!is_tax('voice_category')) echo 'active'; ?>">ALL</a>

        <?php if (taxonomy_exists('voice_category')): 
    $parent_terms = get_terms(array(
        'taxonomy'   => 'voice_category',
        'hide_empty' => false,
        'parent'     => 0,
    ));

    if (!empty($parent_terms) && !is_wp_error($parent_terms)): 
        foreach ($parent_terms as $parent_term): 
            // Display parent term
            ?>
        <a href="<?php echo esc_url(get_term_link($parent_term)); ?>"
          class="tab-menu <?php echo (is_tax('voice_category', $parent_term->term_id) ? 'active' : ''); ?>">
          <?php echo esc_html($parent_term->name); ?>
        </a>

        <?php
            // Fetch child terms
            $child_terms = get_terms(array(
                'taxonomy'   => 'voice_category',
                'hide_empty' => false,
                'parent'     => $parent_term->term_id,
            ));
            if (!empty($child_terms) && !is_wp_error($child_terms)): 
                foreach ($child_terms as $term): ?>
        <a href="<?php echo esc_url(get_term_link($term)); ?>"
          class="tab-menu <?php echo (is_tax('voice_category', $term->term_id) ? 'active' : ''); ?>">
          <?php echo esc_html($term->name); ?>
        </a>
        <?php endforeach; 
          endif;
          endforeach; 
          endif;
        else: ?>
        <p>タクソノミー "voice_category" が登録されていません。</p>
        <?php endif; ?>
      </div>
      <div class="voice-page-contents__cards voice-cards">
        <?php if (have_posts()):
          while(have_posts()):
          the_post();
          $voice_1 = get_field('voice_1');
          $voice_2 = get_field('voice_2');
          $voice_3 = get_field('voice_3');
        ?>
        <div class="voice-cards__item">
          <div class="voice-card">
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
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="noimage">
                  <?php endif; ?>
                </div>
              </div>
              <div class="voice-card__body">
                <p class="voice-card__text">
                  <?php echo esc_html($voice_3); ?>
                </p>
              </div>
            </div>
          </div>
        </div>
        <?php endwhile; endif; ?>
      </div>
      <div class="voice-page-contents__wp-pagenavi">
        <?php wp_pagenavi(); ?>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
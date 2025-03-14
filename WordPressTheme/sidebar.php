<div class="sidebar">

  <div class="sidebar__popularity sidebar-title ">
    <h2>人気記事</h2>
  </div>
  <div class="sidebar__popularity-cards">
    <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'meta_key' => 'post_views_count',
        'orderby' => 'meta_value_num',
        'order' => 'DESC',
      );
      $the_query = new WP_Query($args);
      if ($the_query->have_posts()):
    ?>
    <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
    <div class="sidebar-popularity-cards__item">
      <a href="<?php the_permalink(); ?>" class="sidebar-popularity-card">
        <div class="sidebar-popularity-card__header">
          <?php if (has_post_thumbnail()) : ?>
          <img src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'medium')); ?>"
            alt="<?php echo esc_attr(get_the_title()); ?>" />
          <?php else : ?>
          <img src="<?php echo get_theme_file_uri('/assets/images/common/noimage.jpg'); ?>" alt="No Image">
          <?php endif; ?>
        </div>
        <div class="sidebar-popularity-card__body">
          <time class="sidebar-popularity-card__date" datetime="<?php echo get_the_date('c'); ?>">
            <?php echo get_the_date('Y.m/d'); ?>
          </time>
          <p class="sidebar-popularity-card__title"><?php the_title(); ?></p>
        </div>
      </a>
    </div>
    <?php endwhile;
      wp_reset_postdata();
    endif; ?>
  </div>

  <div class="sidebar__review sidebar-title ">
    <h2>口コミ</h2>
  </div>
  <?php
    $latest_voice_post = new WP_Query(array(
      'post_type' => 'voice',
      'posts_per_page' => 1,
      'post_status' => 'publish'
    ));
    if ($latest_voice_post->have_posts()) :
      while ($latest_voice_post->have_posts()) :
        $latest_voice_post->the_post();
  ?>
  <div class="sidebar__review-cards">
    <div class="sidebar-review-cards__item">
      <div class="sidebar-review-card">
        <div class="sidebar-review-card__header">
          <?php if (has_post_thumbnail()) : ?>
          <?php the_post_thumbnail('medium', array('alt' => get_the_title(), 'loading' => 'lazy', 'decoding' => 'async')); ?>
          <?php else : ?>
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/review.jpg" alt="お客様の画像" />
          <?php endif; ?>
        </div>
        <div class="sidebar-review-card__body">
          <p class="sidebar-review-card__age"><?php the_field('voice_1'); ?> (<?php the_field('voice_2'); ?>)</p>
          <h3 class="sidebar-review-card__title"><?php echo esc_html(get_the_title()); ?></h3>
          <div class="sidebar-review-card__button">
            <a href="<?php echo esc_url(get_post_type_archive_link('voice')); ?>" class="button">
              View more<span class="button__stickarrow"></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
      endwhile;
      wp_reset_postdata();
    else :
      echo '<p>No voice posts found.</p>';
    endif;
  ?>

  <div class="sidebar__campaign sidebar-title ">
    <h2>キャンペーン</h2>
  </div>
  <div class="sidebar__campaign-cards">
    <?php
      $latest_campaign_posts = new WP_Query(array(
        'post_type' => 'campaign',
        'posts_per_page' => 2,
        'post_status' => 'publish'
      ));
      if ($latest_campaign_posts->have_posts()) :
        while ($latest_campaign_posts->have_posts()) :
          $latest_campaign_posts->the_post();
    ?>
    <div class="sidebar-campaign-cards__item">
      <div class="sidebar-campaign-card">
        <div class="sidebar-campaign-card__header">
          <?php if (has_post_thumbnail()) : ?>
          <?php the_post_thumbnail('medium', array('alt' => get_the_title(), 'loading' => 'lazy', 'decoding' => 'async')); ?>
          <?php else : ?>
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign.jpg" alt="キャンペーン画像" />
          <?php endif; ?>
        </div>
        <div class="sidebar-campaign-card__body">
          <h3 class="sidebar-campaign-card__title">ライセンス取得</h3>
          <p class="sidebar-campaign-card__text">全部コミコミ(お一人様)</p>
          <div class="sidebar-campaign-card__prices">
            <div class="sidebar-campaign-card__discounts">
              <p class="sidebar-campaign-card__discount"><?php the_field('campaign-3'); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
        endwhile;
        wp_reset_postdata();
      else :
        echo '<p>No campaign posts found.</p>';
      endif;
    ?>
    <div class="sidebar-campaign-card__button">
      <a href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>" class="button">
        View more<span class="button__stickarrow"></span>
      </a>
    </div>
  </div>

  <div class="sidebar__archive sidebar-title">
    <h2>アーカイブ</h2>
  </div>
  <div class="sidebar-archives">
    <div class="sidebar-archive open js-sidebar-archive1">
      <?php
        $years = $wpdb->get_results("SELECT DISTINCT YEAR(post_date) AS year, MONTH(post_date) AS month FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post' ORDER BY post_date DESC");
        $current_year = null;
        if ($years) {
          echo '<ul class="sidebar-archive__list">';
          foreach ($years as $year) {
            if ($current_year !== $year->year) {
              if ($current_year !== null) echo '</ol></li>';
              $current_year = $year->year;
              echo '<li class="sidebar-archive__item"><button class="sidebar-archive__year">' . esc_html($year->year) . '</button><ol class="sidebar-archive__months">';
            }
            echo '<li class="sidebar-archive__month"><a href="' . esc_url(get_month_link($year->year, $year->month)) . '">' . esc_html($year->month) . '月</a></li>';
          }
          echo '</ol></li></ul>';
        } else {
          echo '<p>アーカイブはありません。</p>';
        }
      ?>
    </div>
  </div>
</div>
<?php get_header(); ?>
<?php wp_head(); ?>

<main>
  <section class="sub-mv">
    <div class="sub-mv__hero">
      <h1 class="sub-mv__titles page-title">blog</h1>
    </div>
    <div class="sub-mv__img js-hero-contents">
      <picture>
        <source media="(max-width: 767px)" srcset="<?php echo get_theme_file_uri(); ?>/images/common/blog-page-sp.jpg">
        <source media="(min-width: 767px)" srcset="<?php echo get_theme_file_uri(); ?>/images/common/blog-page-pc.jpg">
        <img src="<?php echo get_theme_file_uri(); ?>/images/common/blog-page-pc.jpg" alt=" 魚の群れの画像">
      </picture>
    </div>
  </section>

  <?php get_template_part('parts/breadcrumbs')?>

  <section class="blog-detail-contents l-blog-detail-contents">
    <div class="blog-detail-contents__inner inner">
      <?php if (have_posts()):
      while (have_posts()):
        the_post(); ?>


      <time datetime="<?php the_time('c'); ?>" class="blog-detail__date blog-detail-date">
        <?php the_time('Y.m/d'); ?></time>
      <div class=__dag-detail__title blog-detail-title">
        <h2>
          <?php the_title(); ?>
        </h2>
      </div>

      <div class="blog-detail-content">
        <div class="blog-detail__content">
          <div class="blog-detail__content-img">
            <?php if(get_the_post_thumbnail()):
            ?>
            <img src="<?php the_post_thumbnail_url('full'); ?> " alt=" <?php the_title(); ?>の画像" />
            <?php else: ?>
            <img src="<?php echo get_theme_file_uri(); ?>/images/common/noimage.jpg" alt="noimage">
            <?php endif; ?>
          </div>
          <div class=" blog-detail__text">
            <p>
              <?php the_content(); ?> </p>
          </div>

          <div class=" blog-detail__content-img">
            <?php if(get_the_post_thumbnail()):
            ?>
            <img src="<?php the_post_thumbnail_url('full'); ?> " alt=" <?php the_title(); ?>の画像" />
            <?php else: ?>
            <img src="<?php echo get_theme_file_uri(); ?>/images/common/noimage.jpg" alt="noimage">
            <?php endif; ?>
          </div>
          <div class="blog-detail__text">
            <p>
              <?php the_content(); ?>
            </p>
          </div>
          <ul class="blog-detail__list">
            <li>リスト１</li>
            <li>リスト2</li>
            <li>リスト2</li>
          </ul>
          <div class="blog-detail__text">
            <p>
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
            </p>
          </div>
          <div class="blog-detail__button wp-pagenavi">
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

          </div>
          <?php endwhile; endif; ?>
        </div>



        <div class=" blog-page__sidebar sidebar">

          <div class="sidebar__popularity-detail sidebar-title ">
            <h2>人気記事</h2>
          </div>
          <div class="sidebar__popularity-cards">

            <div class="sidebar-popularity-cards__item">
              <a href="#" class="sidebar-popularity-card">
                <div class="sidebar-popularity-card__header">
                  <img src="<?php echo get_theme_file_uri(); ?>/images/common/blog.4.jpg" alt="クマノミの画像" />
                </div>
                <div class="sidebar-popularity-card__body">
                  <p class="sidebar-popularity-card__date">2023.11/17</p>
                  <h3 class="sidebar-popularity-card__title">ライセンス取得</h3>
                </div>
              </a>
            </div>

            <div class="sidebar-popularity-cards__item">
              <a href="#" class="sidebar-popularity-card">
                <div class="sidebar-popularity-card__header">
                  <img src="<?php echo get_theme_file_uri(); ?>/images/common/blog.2.jpg" alt="クマノミの画像" />
                </div>
                <div class="sidebar-popularity-card__body">
                  <p class="sidebar-popularity-card__date">2023.11/17</p>
                  <h3 class="sidebar-popularity-card__title">ライセンス取得</h3>
                </div>
              </a>
            </div>


            <div class="sidebar-popularity-cards__item">
              <a href="#" class="sidebar-popularity-card">
                <div class="sidebar-popularity-card__header">
                  <img src="<?php echo get_theme_file_uri(); ?>/images/common/blog.3.jpg" alt="クマノミの画像" />
                </div>
                <div class="sidebar-popularity-card__body">
                  <p class="sidebar-popularity-card__date">2023.11/17</p>
                  <h3 class="sidebar-popularity-card__title">ライセンス取得</h3>
                </div>
              </a>
            </div>


          </div>

          <div class="sidebar__review sidebar-title ">
            <h2>口コミ</h2>
          </div>

          <div class="sidebar__review-cards">
            <a href="" class="sidebar-review-cards__item">
              <div class="sidebar-review-card">
                <div class="sidebar-review-card__header">
                  <img src="<?php echo get_theme_file_uri(); ?>/images/common/review.jpg" alt="クマノミの画像" />
                </div>
                <div class="sidebar-review-card__body">
                  <p class="sidebar-review-card__age">30代(カップル)</p>
                  <h3 class="sidebar-review-card__title">ここにタイトルが入ります。ここにタイトル</h3>
                  <div class="sidebar-review-card__button">
                    <a href="#" class="button">
                      Contact us<span class="button__stickarrow"></span>
                    </a>
                  </div>
                </div>
              </div>
            </a>
          </div>


          <div class="sidebar__campaign sidebar-title ">
            <h2>キャンペーン</h2>
          </div>
          <div class="sidebar__campaign-cards">
            <div class="sidebar-campaign-cards__item">
              <a href="#" class="sidebar-campaign-card">
                <div class="sidebar-campaign-card__header">
                  <img src="<?php echo get_theme_file_uri(); ?>/images/common/campaign.1.jpg" alt="サンゴの画像" />
                </div>

                <div class="sidebar-campaign-card__body">
                  <div class="sidebar-campaign-card__title">
                    <h3>ライセンス取得</h3>
                  </div>
                  <p class="sidebar-campaign-card__text">
                    全部コミコミ(お一人様)
                  </p>
                  <div class="sidebar-campaign-card__prices">
                    <div class="sidebar-campaign-card__prices-aria">
                      <p class="sidebar-campaign-card__price">¥56,000</p>
                    </div>
                    <div class="sidebar-campaign-card__discounts">
                      <p class="sidebar-campaign-card__discount">¥46,000</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="sidebar-campaign-cards__item">
              <a href="#" class="sidebar-campaign-card">
                <div class="sidebar-campaign-card__header">
                  <img src="<?php echo get_theme_file_uri(); ?>/images/common/campaign.2.jpg" alt="サンゴの画像" />
                </div>

                <div class="sidebar-campaign-card__body">
                  <div class="sidebar-campaign-card__title">
                    <h3>貸切体験ダイビング</h3>
                  </div>
                  <p class="sidebar-campaign-card__text">
                    全部コミコミ(お一人様)
                  </p>
                  <div class="sidebar-campaign-card__prices">
                    <div class="sidebar-campaign-card__prices-aria">
                      <p class="sidebar-campaign-card__price">¥24,000</p>
                    </div>
                    <div class="sidebar-campaign-card__discounts">
                      <p class="sidebar-campaign-card__discount">¥18,000</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="sidebar-campaign-card__button">
              <a href="#" class="button">
                Contact us<span class="button__stickarrow"></span>
              </a>
            </div>

          </div>

          <div class="sidebar__archive sidebar-title ">
            <h2>アーカイブ</h2>
          </div>

          <div class="sidebar-archives">
            <div class="sidebar-archive open js-sidebar-archive1">
              <button>2023</button>
              <ol>
                <li> <a href="#">3月</a></li>
                <li> <a href="#">2月</a></li>
                <li> <a href="#">1月</a></li>
              </ol>
            </div>


            <div class="sidebar-archive js-sidebar-archive2">
              <button>2022</button>
              <ol>
                <li><a href="#">3月</a></li>
                <li><a href="#">2月</a></li>
                <li><a href="#">1月</a></li>
              </ol>
            </div>

          </div>
        </div>

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
            <a href="#" class="button">
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
<?php get_header(); ?>
<?php wp_head(); ?>


<main>
  <section class="sub-mv">
    <div class="sub-mv__hero">
      <h1 class="sub-mv__title page-title">campaign</h1>
    </div>
    <div class="sub-mv__img js-hero-contents">
      <picture>
        <source media="(max-width: 767px)"
          srcset="<?php echo get_theme_file_uri(); ?>//images/common/campaign-img2.jpg">
        <source media="(min-width: 767px)" srcset="<?php echo get_theme_file_uri(); ?>//images/common/campaign-img.jpg">
        <img src="<?php echo get_theme_file_uri(); ?>/images/common/campaign-img.jpg" alt="キンギョハナダイの画像">
      </picture>
    </div>
  </section>

  <?php get_template_part('parts/breadcrumbs')?>

  <section class="campaign-page-contents l-campaign-page-contents">
    <div class="campaign-page-contents__inner inner">
      <div class="campaign-page-contents__tab-menu tab-menus">
        <a href="" class="tab-menu active " data-target="tab-all">ALL</a>
        <a href="" class="tab-menu" data-target="tab-license">ライセンス講習</a>
        <a href="" class="tab-menu" data-target="tab-fan">ファンダイビング</a>
        <a href="" class="tab-menu" data-target="tab-diving">体験ダイビング</a>

      </div>
      <!-- Slides -->

      <div class="campaign-slides campaign-slide-campaign-page">

        <?php if (have_posts()):
        while(have_posts()):
          the_post();
        ?>

        <div class="campaign-slide-card">
          <div class="campaign-slide-card__header">
            <?php if(get_the_post_thumbnail()):
            ?>
            <img src="<?php the_post_thumbnail_url('full'); ?> " alt=" <?php the_title(); ?>の画像" />
            <?php else: ?>
            <img src="<?php echo get_theme_file_uri(); ?>/images/common/noimage.jpg" alt="noimage">
            <?php endif; ?>
          </div>
          <div class="campaign-slide-card__body">
            <?php if (get_field('campaign-1')):?>
            <div class="campaign-slide-card__icon card-icon">

              <h2 class="campaign-slide-card__icon-title">
                <?php the_field('campaign-1'); ?> </h2>
            </div>

            <?php endif; ?>

            <div class="campaign-slide-card__title-campaign">
              <h2>
                <?php the_title();?>
              </h2>
            </div>
            <p class="campaign-slide-card__text-campaign">
              全部コミコミ(お一人様)
            </p>
            <div class="campaign-slide-card__prices">
              <div class="campaign-slide-card__prices-aria">
                <?php if (get_field('campaign-2')):?> <h3 class="campaign-slide-card__price">
                  <?php the_field('campaign-2'); ?></h3>
              </div>
              <?php endif; ?>
              <div class="campaign-slide-card__discounts">

                <?php if (get_field('campaign-3')):?> <h3 class="campaign-slide-card__discount">
                  <?php the_field('campaign-3'); ?>
                </h3>
                <?php endif; ?>
              </div>
            </div>
            <div class="campaign-slide-card__text-about">
              <p>
                <?php the_content(); ?>
              </p>
            </div>
            <?php if (get_field('campaign-4')):?>
            <div class="campaign-slide-card__date">
              <p>
                <?php the_field('campaign-4');?>
              </p>
            </div>
            <?php endif; ?>
            <div class="campaign-slide-card__contact">
              <p>ご予約・お問い合わせはコチラ</p>
            </div>
            <div class="campaign-slide-card__button">
              <a href="#" class="button">
                View more<span class="button__stickarrow"></span>
              </a>
            </div>
          </div>

        </div>




        <?php endwhile; endif;  ?>
      </div>


      <div class="campaign-page-contents__button wp-pagenavi">
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
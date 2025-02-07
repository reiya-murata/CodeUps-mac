<?php get_header(); ?>
<?php wp_head(); ?>

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
        <a href="" class="tab-menu active page-tab js-tab-menu3" data-target="tab-all">ALL</a>
        <a href="" class="tab-menu page-tab js-tab-menu3" data-target="tab-license">ライセンス講習</a>
        <a href="" class="tab-menu  page-tab js-tab-menu3" data-target="tab-fan">ファンダイビング</a>
        <a href="" class="tab-menu  page-tab js-tab-menu3" data-target="tab-diving">体験ダイビング</a>
      </div>


      <div class="voice-page-contents__cards voice-cards">
        <?php if (have_posts()):
        while(have_posts()):
          the_post();
        ?>
        <div class="voice-cards__item tab-all tab-license js-voice-tabbody">
          <a href="#" class="voice-card">
            <div class="voice-card__inner">
              <div class="voice-card__header">
                <div class="voice-card__header-left">
                  <div class="voice-card__age">20代(女性)</div>
                  <div class="voice-card__icon card-icon">
                    ライセンス取得
                  </div>
                  <div class="voice-card__title">
                    <?php the_title();?>
                  </div>
                </div>
                <div class="voice-card__img colorbox">
                  <?php if(get_the_post_thumbnail()):
            ?>
                  <img src="<?php the_post_thumbnail_url('full'); ?> " alt=" <?php the_title(); ?>の画像" />
                  <?php else: ?>
                  <img src="<?php echo get_theme_file_uri(); ?>/images/common/noimage.jpg" alt="noimage">
                  <?php endif; ?>
                </div>
              </div>
              <div class="voice-card__body">
                <p class="voice-card__text">
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                  <br />
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                  <br />
                  ここにテキストが入ります。ここにテキストが入ります。
                </p>
              </div>
            </div>
          </a>

        </div>
        <?php endwhile; endif;  ?>










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
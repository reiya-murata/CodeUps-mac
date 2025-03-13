<?php get_header(); ?>

<?php 
$campaign = esc_url(home_url('/campaign/'));
$about = esc_url(home_url('/about-us/'));
$information = esc_url(home_url('/information/'));
$blog = esc_url(home_url('/blog/'));
$voice = esc_url(home_url('/voice/'));
$price = esc_url(home_url('/price/'));
?>

<main>
  <section class="hero">
    <div class="hero__contents js-hero-contents">
      <p class="hero__title">DIVING</p>
      <p class="hero__subtitle">into the ocean</p>
    </div>
    <!-- main-view-img -->
    <div class="hero__imgs">
      <div class="hero__img">
        <div class="swiper hero__swiper js-hero-swiper">
          <div class="swiper-wrapper">
            <?php
            $mainvisuals = SCF::get('mainvisuals', 21); // 投稿ID 21のデータを取得
              if (!empty($mainvisuals)) :
              foreach ($mainvisuals as $mainvisual) :
            // 画像IDをURLに変換
                $mainvisual_pc = !empty($mainvisual['mainvisual_pc']) ? wp_get_attachment_image_url($mainvisual['mainvisual_pc'], 'full') : '';
                $mainvisual_sp = !empty($mainvisual['mainvisual_sp']) ? wp_get_attachment_image_url($mainvisual['mainvisual_sp'], 'full') : '';
              // 画像データがない場合はスキップ
                  if (!$mainvisual_pc && !$mainvisual_sp) {
                  continue;
                    }
                    ?>
            <div class="hero__slide swiper-slide">
              <picture class="hero__mainvisual">
                <source media="(max-width: 767px)" srcset="<?php echo esc_url($mainvisual_sp); ?>" />
                <source media="(min-width: 768px)" srcset="<?php echo esc_url($mainvisual_pc); ?>" />
                <img src="<?php echo esc_url($mainvisual_pc); ?>" alt="Main Visual" />
              </picture>
            </div>
            <?php
              endforeach;
              else :
              echo '<p>メインビジュアルの画像がありません。</p>';
              endif;
            ?>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>

  <section class="campaign l-campaign">
    <div class="campaign__inner inner">
      <div class="campaign__title section-title">
        <p class="section-title__main">Campaign</p>
        <h2 class="section-title__sub">キャンペーン</h2>
      </div>
      <div class="campaign__swiper">
        <div class="swiper campaign__swiper js-campaign__swiper">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper campaign__slider">
            <!-- サブループ開始（カスタム投稿 campaign） -->
            <?php
              $args = array(
              'post_type' => 'campaign',
              'posts_per_page' => 8,
              );
              $the_query = new WP_Query($args);
              if ($the_query->have_posts()):
            ?>
            <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
            <?php
      // カテゴリー情報の取得
      $categories = get_the_terms(get_the_ID(), 'campaign_category');
      $category_name = '未分類';
      if (!empty($categories) && !is_wp_error($categories)) {
        $category_name = $categories[0]->name;
      }
      $campaign_2 = get_field('campaign-2');
      $campaign_3 = get_field('campaign-3');
      ?>
            <!-- Slides -->
            <div class="campaign__slide swiper-slide">
              <div class="slide-card">
                <a href="<?php the_permalink(); ?>">
                  <div class="slide-card__header">
                    <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>"
                      alt="<?php echo esc_attr(get_the_title()); ?>のアイキャッチ画像">
                    <?php else : ?>
                    <img src="<?php echo get_theme_file_uri('/assets/images/common/noimage.jpg'); ?>" alt="noimage">
                    <?php endif; ?>
                  </div>
                  <div class="slide-card__body">
                    <div class="slide-card__icon card-icon">
                      <h2 class="slide-card__icon-title"><?php echo esc_html($category_name); ?></h2>
                    </div>
                    <div class="slide-card__title-campaign">
                      <h2><?php echo esc_html(get_the_title()); ?></h2>
                    </div>
                    <p class="slide-card__text-campaign">全部コミコミ(お一人様)</p>
                    <div class="slide-card__prices">
                      <div class="slide-card__prices-aria">
                        <?php if ($campaign_2): ?>
                        <h3 class="slide-card__price"><?php echo esc_html($campaign_2); ?></h3>
                        <?php endif; ?>
                      </div>
                      <div class="slide-card__discounts">
                        <?php if ($campaign_3): ?>
                        <h3 class="slide-card__discount"><?php echo esc_html($campaign_3); ?></h3>
                        <?php endif; ?>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="campaign__swiper-next">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/right-arrow.png" alt="右へ" />
      </div>
      <div class="campaign__swiper-prev">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/left-arrow.png" alt="左へ" />
      </div>
      <div class="campaign__button">
        <a href="<?php echo $campaign ?>" class="button">
          View more<span class="button__stickarrow"></span>
        </a>
      </div>
    </div>
  </section>

  <section class="about l-about">
    <div class="about__inner inner">
      <div class="about__title section-title">
        <p class="section-title__main">About us</p>
        <h2 class="section-title__sub">私たちについて</h2>
      </div>
      <div class="about__body">
        <div class="about__img-1">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about.1.jpg" alt="屋根の画像" />
        </div>
        <div class="about__img-2">
          <picture>
            <source media="(max-width: 767px)"
              srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/about.2.jpg" />
            <source media="(min-width: 767px)"
              srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/about.pc2.jpg" />
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about.pc2.jpg" alt="黄色の魚の画像" />
          </picture>
        </div>
        <div class="about__content">
          <div class="about__content-titles">
            <h2 class="about__content-title">
              Dive into
              <br />
              the Ocean
            </h2>
          </div>
          <div class="about__texts">
            <p class="about__text">
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
              <br />
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト<span>が入ります。</span>
            </p>
            <div class="about__button">
              <a href="<?php echo $about ?>" class="button">
                View more<span class="button__stickarrow"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="information l-information">
    <div class="information__inner inner">
      <div class="information__title section-title">
        <p class="section-title__main">information</p>
        <h2 class="section-title__sub">ダイビング情報</h2>
      </div>
      <div class="information__content">
        <div class="information__content-img colorbox">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information.jpg" alt="黄色の魚の画像" />
        </div>
        <div class="information__content-right">
          <div class="information__content-titles">
            <h3 class="information__content-title">ライセンス講習</h3>
          </div>
          <p class="information__content-text">
            当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br />
            正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
          </p>
          <div class="information__button">
            <a href="<?php echo $information ?>" class="button">
              View more<span class="button__stickarrow"></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="blog l-blog">
    <div class="blog__bg-img">
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog.pc.img.jpg" alt="水中の画像" />
    </div>
    <div class="blog__inner inner">
      <div class="blog__title section-title section-title--blog">
        <p class="section-title__main">blog</p>
        <h2 class="section-title__sub">ブログ</h2>
      </div>
      <div class="blog__cards blog-cards">
        <!-- メインループ開始（通常投稿 blog） -->
        <?php
          $args = array(
          'post_type' => 'post',
          'posts_per_page' => 3,
          );
          $the_query = new WP_Query($args);
        if ($the_query->have_posts()):
        ?>
        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
        <div class="blog-cards__item">
          <a href="<?php the_permalink(); ?>" class="blog-card">
            <div class="blog-card__header">
              <?php if (has_post_thumbnail()) : ?>
              <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
              <?php else : ?>
              <img src="<?php echo get_theme_file_uri('/assets/images/common/noimage.jpg'); ?>" alt="noimage">
              <?php endif; ?>
            </div>
            <div class="blog-card__body">
              <time class="blog-card__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m/d'); ?></time>
              <h2 class="blog-card__title"><?php the_title(); ?></h2>
              <p class="blog-card__text">
                <?php
              // 抜粋を取得し180文字以上は省略
              $excerpt = get_the_excerpt();
              echo esc_html(mb_strimwidth($excerpt, 0, 180, '...'));
                ?>
              </p>
            </div>
          </a>
        </div>
        <?php endwhile; wp_reset_postdata(); endif; ?>
        <!-- サブループ終了 -->
      </div>
      <div class="blog__button">
        <a href="<?php echo $blog?>" class="button">
          View more<span class="button__stickarrow"> </span>
        </a>
      </div>
    </div>
  </section>

  <section class="voice l-voice">
    <div class="voice__inner inner">
      <div class="voice__title section-title">
        <p class="section-title__main">Voice</p>
        <h2 class="section-title__sub">お客様の声</h2>
      </div>
      <div class="voice__cards voice-cards">
        <!-- サブループ開始（カスタム投稿 voice） -->
        <?php
          $args = array(
          'post_type' => 'voice',
          'posts_per_page' => 2,
          );
          $query = new WP_Query($args);
        ?>
        <?php if ($query->have_posts()) : ?>
        <?php while ($query->have_posts()) : $query->the_post(); ?>
        <?php
          $categories = get_the_terms(get_the_ID(), 'voice_category');
          $category_classes = '';
        if ($categories && !is_wp_error($categories)) {
        foreach ($categories as $category) {
        $category_classes .= ' js-tab-' . esc_attr($category->term_id);
          }
        }
        $age = get_field('voice_1');
        $gender = get_field('voice_2');
        $voicetext = get_field('voice_3');
        ?>
        <div class="voice-cards__item<?php echo esc_attr($category_classes); ?>">
          <a href="<?php the_permalink(); ?>" class="voice-card">
            <div class="voice-card__inner">
              <?php if (!empty($age) && !empty($gender)): ?>
              <div class="voice-card__header">
                <div class="voice-card__header-left">
                  <div class="voice-card__age"><?php echo esc_html($age); ?>(<?php echo esc_html($gender); ?>)</div>
                  <div class="voice-card__icon card-icon"><?php echo esc_html($categories[0]->name ?? '未分類'); ?></div>
                  <div class="voice-card__title"><?php the_title(); ?></div>
                </div>
                <?php endif; ?>
                <div class="voice-card__img colorbox">
                  <?php if (has_post_thumbnail()) : ?>
                  <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                  <?php else : ?>
                  <img src="<?php echo get_theme_file_uri('/assets/images/common/noimage.jpg'); ?>" alt="noimage">
                  <?php endif; ?>
                </div>
              </div>
              <div class="voice-card__body">
                <?php if ($voicetext): ?>
                <p class="voice-card__text">
                  <?php 
                    // 350文字以上は省略して「...」を追加
                    echo esc_html(mb_strimwidth($voicetext, 0, 350, '...'));
                  ?>
                </p>
                <?php endif; ?>
              </div>
            </div>
          </a>
        </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
      <div class="voice__button">
        <a href="<?php echo $voice?>" class="button">
          View more<span class="button__stickarrow"></span>
        </a>
      </div>
    </div>
  </section>

  <section class="price l-price">
    <div class="price__inner inner">
      <div class="price__title section-title">
        <p class="section-title__main">price</p>
        <h2 class="section-title__sub">料金一覧</h2>
      </div>
      <div class="price__contents">
        <div class="price__contents-left">
          <div class="price__content--fast">
            <div class="price__content-title">ライセンス講習</div>
            <div class="price__items">
              <?php
              // 'price' のページを取得
              $price_page = get_page_by_path('price');
              // ページが見つかった場合
              if ($price_page) {
              $post_id = $price_page->ID; // 投稿IDを取得

              // SCF からデータを取得
              $license = SCF::get('license', $post_id);

              // データが取得できている場合
              if ($license) : 
                // SCFで取得したデータが配列であるかを確認
                if (is_array($license)) {
                  foreach ($license as $entry) :
                    // name_1 と price_1 が存在している場合のみ表示
                    if (!empty($entry['name_1']) && !empty($entry['price_1'])) :
                ?>
              <div class="price__item">
                <div class="price__item-title">
                  <?php echo esc_html($entry['name_1']); ?>
                </div>
                <div class="price__item-price">
                  <?php echo esc_html($entry['price_1']); ?>
                </div>
              </div>
              <?php
              endif;
              endforeach;
              } else {
              // もし $license が配列でない場合（単一値の場合など）
              if (!empty($license['name_1']) && !empty($license['price_1'])) :
              ?>
              <div class="price__item">
                <div class="price__item-title">
                  <?php echo esc_html($license['name_1']); ?>
                </div>
                <div class="price__item-price">
                  <?php echo esc_html($license['price_1']); ?>
                </div>
              </div>
              <?php
              endif;
              }
          endif;
        } else {
          echo '該当する価格ページが見つかりません。';
        }
        ?>
            </div>
          </div>
          <div class="price__content">
            <div class="price__content-title">体験ダイビング</div>
            <div class="price__items">
              <?php
                // 'price' のページを取得
                $price_page = get_page_by_path('price');
                // ページが見つかった場合
              if ($price_page) {
                $post_id = $price_page->ID; // 投稿IDを取得
                // SCF からデータを取得
                $experience = SCF::get('experience', $post_id);
                // データが取得できている場合
              if ($license) : 
                // SCFで取得したデータが配列であるかを確認
              if (is_array($experience)) {
              foreach ($experience as $entry) :
                        // name_1 と price_1 が存在している場合のみ表示
              if (!empty($entry['name_2']) && !empty($entry['price_2'])) :
              ?>
              <div class="price__item">
                <div class="price__item-title">
                  <?php echo esc_html($entry['name_2']); ?>
                </div>
                <div class="price__item-price">
                  <?php echo esc_html($entry['price_2']); ?>
                </div>
              </div>
              <?php
              endif;
              endforeach;
                } else {
                    // もし $license が配列でない場合（単一値の場合など）
                    if (!empty($experience['name_2']) && !empty($experience['price_2'])) :
                ?>
              <div class="price__item">
                <div class="price__item-title">
                  <?php echo esc_html($license['name_2']); ?>
                </div>
                <div class="price__item-price">
                  <?php echo esc_html($license['price_2']); ?>
                </div>
              </div>
              <?php
              endif;
                }
            endif;
        } else {
            echo '該当する価格ページが見つかりません。';
        }
        ?>
            </div>
          </div>
          <div class="price__content">
            <div class="price__content-title">ファンダイビング</div>
            <div class="price__items">
              <?php
                // 'price' のページを取得
                $price_page = get_page_by_path('price');
                // ページが見つかった場合
              if ($price_page) {
                $post_id = $price_page->ID; // 投稿IDを取得
                // SCF からデータを取得
                $fan = SCF::get('fan', $post_id);
                // データが取得できている場合
                if ($fan) : 
                // SCFで取得したデータが配列であるかを確認
                if (is_array($fan)) {
                foreach ($fan as $entry) :
                // name_1 と price_1 が存在している場合のみ表示
                if (!empty($entry['name_3']) && !empty($entry['price_3'])) :
                ?>
              <div class="price__item">
                <div class="price__item-title">
                  <?php echo esc_html($entry['name_3']); ?>
                </div>
                <div class="price__item-price">
                  <?php echo esc_html($entry['price_3']); ?>
                </div>
              </div>
              <?php
              endif;
              endforeach;
                } else {
                    // もし $license が配列でない場合（単一値の場合など）
                if (!empty($fan['name_3']) && !empty($fan['price_3'])) :
                ?>
              <div class="price__item">
                <div class="price__item-title">
                  <?php echo esc_html($license['name_3']); ?>
                </div>
                <div class="price__item-price">
                  <?php echo esc_html($license['price_3']); ?>
                </div>
              </div>
              <?php
              endif;
                }
            endif;
        } else {
            echo '該当する価格ページが見つかりません。';
          }
        ?>
            </div>
          </div>
          <div class="price__content">
            <div class="price__content-title">スペシャルダイビング</div>
            <div class="price__items">
              <?php
                // 'price' のページを取得
                $price_page = get_page_by_path('price');
                // ページが見つかった場合
              if ($price_page) {
                $post_id = $price_page->ID; // 投稿IDを取得
                // SCF からデータを取得
                $special = SCF::get('special', $post_id);
                // データが取得できている場合
                if ($special) : 
                // SCFで取得したデータが配列であるかを確認
                if (is_array($special)) {
                foreach ($special as $entry) :
                // name_1 と price_1 が存在している場合のみ表示
                if (!empty($entry['name_4']) && !empty($entry['price_4'])) :
                ?>
              <div class="price__item">
                <div class="price__item-title">
                  <?php echo esc_html($entry['name_4']); ?>
                </div>
                <div class="price__item-price">
                  <?php echo esc_html($entry['price_4']); ?>
                </div>
              </div>
              <?php
              endif;
              endforeach;
              } else {
                // もし $license が配列でない場合（単一値の場合など）
                if (!empty($special['name_4']) && !empty($special['price_4'])) :
                ?>
              <div class="price__item">
                <div class="price__item-title">
                  <?php echo esc_html($special['name_4']); ?>
                </div>
                <div class="price__item-price">
                  <?php echo esc_html($special['price_4']); ?>
                </div>
              </div>
              <?php
              endif;
                }
            endif;
          } else {
            echo '該当する価格ページが見つかりません。';
          }
        ?>
            </div>
          </div>
        </div>
        <div class="price__contents-right colorbox">
          <picture>
            <source media="(max-width: 767px)"
              srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/price__sp.jpg" />
            <source media="(min-width: 767px)"
              srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/price__img.1.jpg" />
            <img class="price__img" src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price__img.1.jpg"
              alt="サンゴと赤い魚の画像" />
          </picture>
        </div>
      </div>
      <div class="price__button">
        <a href="<?php echo $price?>" class="button">
          View more<span class="button__stickarrow"></span>
        </a>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
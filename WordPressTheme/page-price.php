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
      <h1 class="price-page__titles page-title">price</h1>
    </div>
    <div class="price-page__img js-hero-contents">
      <picture>
        <source media="(max-width: 767px)"
          srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-page-sp.jpg">
        <source media="(min-width: 767px)"
          srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-page-pc.jpg">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-page-pc.jpg" alt=" 魚の群れの画像">
      </picture>
    </div>
  </section>

  <?php get_template_part('parts/breadcrumbs')?>

  <section class="price-page-contents l-price-page-contents">
    <div class="price-page-contents__inner inner--sub">
      <?php
        $post_id = get_the_ID();
        $license = SCF::get('license', $post_id); // 投稿IDを指定してデータ取得

      if ($license && is_array($license)) : // データが存在し、配列であることを確認
      ?>
      <div class="price-page-content" id="license">
        <div class="price-page-content__category">
          <p>ライセンス講習</p>
        </div>
        <table class="price-page-table">
          <tbody>
            <?php foreach ($license as $entry) : ?>
            <?php if (!empty($entry['name_1']) && !empty($entry['price_1'])) : ?>
            <tr class="price-page-table__row">
              <td class="price-page-table__name">
                <?php echo esc_html($entry['name_1']); ?>
              </td>
              <td class="price-page-table__price">
                <?php echo esc_html($entry['price_1']); ?>
              </td>
            </tr>
            <?php endif; ?>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <?php
      endif;
      ?>


      <?php
        $post_id = get_the_ID();
        $experience = SCF::get('experience', $post_id); // 投稿IDを指定してデータ取得

      if ($experience === null) {
        echo '<p>SCFデータが取得できません。</p>';
        }

      if ($experience && is_array($experience)) : // データが存在し、配列であることを確認
    ?>

      <div class="price-page-content" id="experience">
        <div class="price-page-content__category">
          <p>体験ダイビング</p>
        </div>
        <table class="price-page-table">
          <tbody>
            <?php foreach ($experience as $entry) : ?>
            <?php if (!empty($entry['name_2']) && !empty($entry['price_2'])) : ?>
            <tr class="price-page-table__row">
              <td class="price-page-table__name">
                <?php echo esc_html($entry['name_2']); ?>
              </td>
              <td class="price-page-table__price">
                <?php echo esc_html($entry['price_2']); ?>
              </td>
            </tr>
            <?php endif; ?>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <?php
      endif;
      ?>



      <?php
        $post_id = get_the_ID();
        $fan = SCF::get('fan', $post_id); // 投稿IDを指定してデータ取得

      if ($fan === null) {
        echo '<p>SCFデータが取得できません。</p>';
        }

      if ($fan && is_array($fan)) : // データが存在し、配列であることを確認
      ?>

      <div class="price-page-content" id="fan">
        <div class="price-page-content__category">
          <p>ファンダイビング</p>
        </div>
        <table class="price-page-table">
          <tbody>
            <?php foreach ($fan as $entry) : ?>
            <?php if (!empty($entry['name_3']) && !empty($entry['price_3'])) : ?>
            <tr class="price-page-table__row">
              <td class="price-page-table__name">
                <?php echo esc_html($entry['name_3']); ?>
              </td>
              <td class="price-page-table__price">
                <?php echo esc_html($entry['price_3']); ?>
              </td>
            </tr>
            <?php endif; ?>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <?php
      endif;
      ?>




      <?php
        $post_id = get_the_ID();
        $special = SCF::get('special', $post_id); // 投稿IDを指定してデータ取得

      if ($special === null) {
        echo '<p>SCFデータが取得できません。</p>';
        }

      if ($special && is_array($special)) : // データが存在し、配列であることを確認
      ?>

      <div class="price-page-content" id="special">
        <div class="price-page-content__category">
          <p>スペシャルダイビング</p>
        </div>
        <table class="price-page-table">
          <tbody>
            <?php foreach ($special as $entry) : ?>
            <?php if (!empty($entry['name_4']) && !empty($entry['price_4'])) : ?>
            <tr class="price-page-table__row">
              <td class="price-page-table__name">
                <?php echo esc_html($entry['name_4']); ?>
              </td>
              <td class="price-page-table__price">
                <?php echo esc_html($entry['price_4']); ?>
              </td>
            </tr>
            <?php endif; ?>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <?php
      endif;
      ?>




  </section>



</main>


<?php get_footer(); ?>
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
$sitemap = esc_url(home_url('/sitemap/'));
?>
<?php wp_footer(); ?>
<section class="contact l-contact
  <?php echo (is_404() || is_page(array('contact', 'thanks'))) ? 'contact--display-none' : ''; ?>">
  <div class="contact__inner inner">
    <div class="contact__card">
      <div class="contact__left">
        <div class="contact__logo-codeups">
          <picture class="logo__contact-codeups">
            <source media="(max-width: 767px)"
              srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/CodeUps__bottom-sp.svg" />
            <source media="(min-width: 767px)"
              srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/cordUps_blue.svg" />
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/cordUps_blue.svg" alt="codeUpsのロゴ" />
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
        <div class="contact__title">
          <div class="section-title section-title--contact">
            <p class="section-title__main">contact</p>
            <h2 class="section-title__sub">お問い合わせ</h2>
          </div>
        </div>
        <h3 class="contact__sub section-title__sub">
          ご予約・お問い合わせはコチラ
        </h3>
        <div class="contact__button">
          <a href="<?php echo $contact ?>" class="button">
            Contact us<span class="button__stickarrow"></span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<footer class="footer l-footer  <?php echo is_404() ? 'l-404-footer' : ''; ?>">
  <div class="footer__inner inner">
    <div class="footer__icons nav-icons">
      <div class="nav-icons__icon">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/CodeUps.svg" alt="codeUps-icon" />
        </a>
      </div>
      <div class="nav-icons__icon sns">
        <div class="sns__facebook">
          <a href="https://www.facebook.com/" target="_blank">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/FacebookLogofacebook.svg"
              alt="facebookのアイコン" />
          </a>
        </div>
        <div class="sns__instagram">
          <a href="https://www.instagram.com/" target="_blank">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/InstagramLogoinstagram.svg"
              alt="インスタグラムのアイコン" />
          </a>
        </div>

      </div>
    </div>
    <nav class="footer__nav nav nav--bottom">
      <div class="nav__items-bottom">
        <div class="nav__flexes">
          <div class="nav__flexes-right">
            <ul class="nav__flex ">
              <li class="nav__item nav__item--bold">
                <a href="<?php echo $campaign;?>">キャンペーン</a>
              </li>
              <li class="nav__item">
                <a href="#">ライセンス取得</a>
              </li>
              <li class="nav__item">
                <a href="#">貸切体験ダイビング</a>
              </li>
              <li class="nav__item">
                <a href="#">ナイトダイビング</a>
              </li>

              <li class="nav__item nav__item--bold">
                <a href="<?php echo $about;?>"> 私たちについて</a>
              </li>
            </ul>

            <ul class="nav__flex ">
              <li class="nav__item nav__item--bold">
                <a href="<?php echo $information;?>"> ダイビング情報</a>
              </li>
              <li class="nav__item"><a href="#">ライセンス講習</a></li>
              <li class="nav__item"><a href="#">体験ダイビング</a></li>
              <li class="nav__item">
                <a href="#">ファンダイビング</a>
              </li>

              <li class="nav__item nav__item--bold">
                <a href="<?php echo $blog;?>">ブログ</a>
              </li>
            </ul>
          </div>
          <div class="nav__flexes-left">
            <ul class="nav__flex">
              <li class="nav__item nav__item--bold">
                <a href="<?php echo $voice;?>">お客様の声</a>
              </li>

              <li class="nav__item nav__item--bold">
                <a href="<?php echo $price;?>">料金一覧</a>
              </li>
              <li class="nav__item"><a href="#">ライセンス講習</a></li>
              <li class="nav__item"><a href="#">体験ダイビング</a></li>
              <li class="nav__item">
                <a href="#">ファンダイビング</a>
              </li>
            </ul>

            <ul class="nav__flex">
              <li class="nav__item nav__item--bold">
                <a href="<?php echo $faq;?>">よくある質問</a>
              </li>
              <li class="nav__item nav__item--bold">
                <a href="<?php echo $privacy;?>">プライバシー<br>ポリシー</a>
              </li>
              <li class="nav__item nav__item--bold">
                <a href="<?php echo $terms;?>">利用規約</a>
              </li>
              <li class="nav__item nav__item--bold">
                <a href="<?php echo $contact;?>">お問い合わせ</a>
              </li>
              <li class="nav__item nav__item--bold">
                <a href="<?php echo $sitemap;?>">サイトマップ</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <div class="footer__copyright">
      <p>Copyright © 2021 - 2023 CodeUps LLC. All Rights Reserved.</p>
    </div>
  </div>
</footer>
</body>

</html>
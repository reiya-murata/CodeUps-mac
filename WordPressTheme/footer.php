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
<footer class="footer l-footer">
  <div class="footer__inner inner">
    <div class="footer__icons nav-icons">
      <div class="nav-icons__icon">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
          <img src="<?php echo get_theme_file_uri(); ?>/images/common/CodeUps.svg" alt="codeUps-icon" />
        </a>
      </div>
      <div class="nav-icons__icon sns">
        <div class="sns__facebook">
          <a href="https://www.facebook.com/" target="_blank">
            <img src="<?php echo get_theme_file_uri(); ?>/images/common/FacebookLogofacebook.svg" alt="facebookのアイコン" />
          </a>
        </div>
        <div class="sns__instagram">
          <a href="https://www.instagram.com/" target="_blank">
            <img src="<?php echo get_theme_file_uri(); ?>/images/common/InstagramLogoinstagram.svg"
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
              <li class="nav__item nav__item--bold">
                <a href="<?php echo $sitemap;?>">サイトマップ</a>
              </li>
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
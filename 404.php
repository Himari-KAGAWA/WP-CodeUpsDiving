<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <!-- noindex -->
  <meta name="robots" content="noindex" />
  <!-- meta情報 -->
  <title>CodeUps：DIVING into the ocean</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <!-- ogp -->
  <meta property="og:title" content="" />
  <meta property="og:type" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:description" content="" />
  <!-- ファビコン -->
  <link rel="icon" href="http://xs273754.xsrv.jp/himarin_DIVING/images/common/favicon.ico" />
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Gotu&family=Lato:wght@400;700&family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet" />
  <!-- swiper style -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.7/swiper-bundle.min.css" />
  <!-- swiper js -->
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.7/swiper-bundle.min.js"></script>
  <!-- inview js -->
  <script defer src="./assets/js/jquery.inview.min.js"></script>
  <?php wp_head(); ?>
</head>

<body class="body--404">
  <!-- header -->
  <header class="header">
    <div class="header__inner">
      <h1 class="header__logo">
        <a href="http://xs273754.xsrv.jp/himarin_DIVING/" class="header__logo-link">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/pc/logo-header_pc.png" media="(min-width:767px)" />
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/logo-header_sp.png" alt="CodeUps" width="102" height="38" />
          </picture>
        </a>
      </h1>
      <div class="header__drawer hamburger u-mobile js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <!-- PCナビ -->
      <nav class="header__pc-nav pc-nav u-desktop">
        <ul class="pc-nav__items">
          <li class="pc-nav__item">
            <a href="http://xs273754.xsrv.jp/himarin_DIVING/campaign/" class="pc-nav__link first">キャンペーン
              <span aria-hidden="true">Campaign</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="http://xs273754.xsrv.jp/himarin_DIVING/about-us/">私たちについて
              <span aria-hidden="true">about us</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="http://xs273754.xsrv.jp/himarin_DIVING/information/">ダイビング情報
              <span aria-hidden="true">Information</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="http://xs273754.xsrv.jp/himarin_DIVING/blog/">ブログ
              <span aria-hidden="true">Blog</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="http://xs273754.xsrv.jp/himarin_DIVING/voice/">お客様の声
              <span aria-hidden="true">Voice</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="http://xs273754.xsrv.jp/himarin_DIVING/price/">料金一覧
              <span aria-hidden="true">Price</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="http://xs273754.xsrv.jp/himarin_DIVING/faq">よくある質問
              <span aria-hidden="true">FAQ</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="http://xs273754.xsrv.jp/himarin_DIVING/contact/">お問合せ
              <span aria-hidden="true">Contact</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /PCナビ -->
      <!-- SPナビ -->
      <div class="header__sp-nav sp-nav js-sp-nav u-mobile">
        <div class="sp-nav__header">
          <div class="sp-nav__logo">
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/logo-nav_sp.png" alt="CodeUps" />
          </div>
        </div>
        <div class="sp-nav__inner inner">
          <div class="sp-nav__content">
            <ul class="sp-nav__items1">
              <li class="sp-nav__item sp-nav__item--bold">
                <a href="http://xs273754.xsrv.jp/himarin_DIVING/campaign/">キャンペーン</a>
              </li>
              <li class="sp-nav__item">
                <a href="http://xs273754.xsrv.jp/himarin_DIVING/campaign#tab01">ライセンス取得</a>
              </li>
              <li class="sp-nav__item">
                <a href="http://xs273754.xsrv.jp/himarin_DIVING/campaign#tab03">貸切体験ダイビング</a>
              </li>
              <li class="sp-nav__item">
                <a href="http://xs273754.xsrv.jp/himarin_DIVING/campaign#tab02">ファンダイビング</a>
              </li>
              <li class="sp-nav__item sp-nav__item--bold sp-nav__item--layout">
                <a href="http://xs273754.xsrv.jp/himarin_DIVING/about-us/">私たちについて</a>
              </li>
            </ul>
            <ul class="sp-nav__items2">
              <li class="sp-nav__item sp-nav__item--bold">
                <a href="http://xs273754.xsrv.jp/himarin_DIVING/information/">ダイビング情報</a>
              </li>
              <li class="sp-nav__item">
                <a href="http://xs273754.xsrv.jp/himarin_DIVING/information#panel1">ライセンス講習</a>
              </li>
              <li class="sp-nav__item">
                <a href="http://xs273754.xsrv.jp/himarin_DIVING/information#panel3">体験ダイビング</a>
              </li>
              <li class="sp-nav__item">
                <a href="http://xs273754.xsrv.jp/himarin_DIVING/information#panel2">ファンダイビング</a>
              </li>
              <li class="sp-nav__item sp-nav__item--bold sp-nav__item--layout">
                <a href="http://xs273754.xsrv.jp/himarin_DIVING/blog/">ブログ</a>
              </li>
            </ul>
            <ul class="sp-nav__items3">
              <li class="sp-nav__item sp-nav__item--bold">
                <a href="http://xs273754.xsrv.jp/himarin_DIVING/voice/">お客様の声</a>
              </li>
              <li class="sp-nav__item sp-nav__item--bold sp-nav__item--layout">
                <a href="http://xs273754.xsrv.jp/himarin_DIVING/price/">料金一覧</a>
              </li>
              <li class="sp-nav__item">
                <a href="http://xs273754.xsrv.jp/himarin_DIVING/price#license">ライセンス講習</a>
              </li>
              <li class="sp-nav__item">
                <a href="http://xs273754.xsrv.jp/himarin_DIVING/price#experience">体験ダイビング</a>
              </li>
              <li class="sp-nav__item">
                <a href="http://xs273754.xsrv.jp/himarin_DIVING/price#fun">ファンダイビング</a>
              </li>
            </ul>
            <ul class="sp-nav__items4">
              <li class="sp-nav__item sp-nav__item--bold">
                <a href="http://xs273754.xsrv.jp/himarin_DIVING/faq/">よくある質問</a>
              </li>
              <li class="sp-nav__item sp-nav__item--bold sp-nav__item--layout">
                <a href="http://xs273754.xsrv.jp/himarin_DIVING/privacy/">プライバシー<br class="u-mobile" />ポリシー</a>
              </li>
              <li class="sp-nav__item sp-nav__item--bold sp-nav__item--layout">
                <a href="http://xs273754.xsrv.jp/himarin_DIVING/terms-of-service/">利用規約</a>
              </li>
              <li class="sp-nav__item sp-nav__item--bold sp-nav__item--layout">
                <a href="http://xs273754.xsrv.jp/himarin_DIVING/contact/">お問わ合せ</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- /SPナビ -->
  </header>
  <!-- /header -->

  <main>

    <!-- breadcrumbs -->
    <?php if (function_exists('bcn_display')) : ?>
  <nav class="breadcrumb breadcrumb--404 top-breadcrumb--404" aria-label="Breadcrumb">
    <div class="breadcrumb__inner inner">
      <ol class="breadcrumb__list">
        <li class="breadcrumb__item">
          <div aria-current="location"><?php bcn_display(); ?></div>
        </li>
      </ol>
    </div>
  </nav>
<?php endif; ?>
    <!-- /breadcrumbs -->

    <!-- page-contents -->
    <div class="not-found">
      <div class="not-found__bg"></div>
      <div class="not-found__inner inner">
        <div class="not-found__wrapper">
          <h1 class="not-found__message">404</h1>
          <p class="not-found__text">
            申し訳ありません。<br />お探しのページが見つかりません。
          </p>
          <div class="not-found__link">
            <a href="http://xs273754.xsrv.jp/himarin_DIVING/" class="link-button link-button--404">Page TOP
              <span class="arrow-x arrow-x--400"></span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- /page-contents -->
  </main>

  <?php get_footer(); ?>
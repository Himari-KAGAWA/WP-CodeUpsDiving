<?php get_header(); ?>

<main>
  <section class="sub-mv sub-mv__bg sub-mv__bg--siteMap">
    <div class="sub-mv_inner">
      <div class="sub-mv__header">
        <h1 class="sub-mv__title sub-mv__title--siteMap">
          site <span class="sub-mv__title-uppercase">map</span>
        </h1>
      </div>
    </div>
    <div class="sub-mv__icon"></div>
  </section>

  <!-- breadcrumbs -->
  <?php get_template_part('breadcrumb'); ?>
  <!-- /breadcrumbs -->

  <!-- page-contents -->
  <div class="page top-page top-page--siteMap">
    <div class="page__icon"></div>
    <div class="page__inner inner">
      <div class="page__content sitemap">
        <div class="sitemap__content">
          <ul class="sitemap__items1">
            <li class="sitemap__item sitemap__item-bold">
              <a href="./page-campaign.html">キャンペーン</a>
            </li>
            <li class="sitemap__item">
              <a href="./page-campaign.html#tab01">ライセンス取得</a>
            </li>
            <li class="sitemap__item">
              <a href="./page-campaign.html#tab03">貸切体験ダイビング</a>
            </li>
            <li class="sitemap__item">
              <a href="./page-campaign.html#tab02">ナイトダイビング</a>
            </li>
            <li class="sitemap__item sitemap__item-bold sitemap__item--layout">
              <a href="./page-about.html">私たちについて</a>
            </li>
          </ul>
          <ul class="sitemap__items2">
            <li class="sitemap__item sitemap__item-bold">
              <a href="./page-information.html">ダイビング情報</a>
            </li>
            <li class="sitemap__item">
              <a href="./page-information.html#panel1">ライセンス講習</a>
            </li>
            <li class="sitemap__item">
              <a href="./page-information.html#panel3">体験ダイビング</a>
            </li>
            <li class="sitemap__item">
              <a href="./page-information.html#panel2">ファンダイビング</a>
            </li>
            <li class="sitemap__item sitemap__item-bold sitemap__item--layout">
              <a href="./page-blog.html">ブログ</a>
            </li>
          </ul>
          <ul class="sitemap__items3">
            <li class="sitemap__item sitemap__item-bold">
              <a href="./page-voice.html">お客様の声</a>
            </li>
            <li class="sitemap__item sitemap__item-bold sitemap__item--layout">
              <a href="./page-price.html">料金一覧</a>
            </li>
            <li class="sitemap__item">
              <a href="./page-campaign.html#tab01">ライセンス講習</a>
            </li>
            <li class="sitemap__item">
              <a href="./page-campaign.html#tab03">体験ダイビング</a>
            </li>
            <li class="sitemap__item">
              <a href="./page-campaign.html#tab02">ファンダイビング</a>
            </li>
          </ul>
          <ul class="sitemap__items4">
            <li class="sitemap__item sitemap__item-bold">
              <a href="./page-faq.html">よくある質問</a>
            </li>
            <li class="sitemap__item sitemap__item-bold sitemap__item--layout">
              <a href="./page-privacy.html">プライバシー<br class="u-mobile" />ポリシー</a>
            </li>
            <li class="sitemap__item sitemap__item-bold sitemap__item--layout">
              <a href="./page-terms.html">利用規約</a>
            </li>
            <li class="sitemap__item sitemap__item-bold sitemap__item--layout">
              <a href="./page-contact.html">お問わ合せ</a>
            </li>
          </ul>

        </div>
      </div>
    </div>
  </div>
  <!-- /page-contents -->

  <!-- contact -->
  <?php get_template_part('layout-contact'); ?>
  <!-- /contact -->

</main>
<?php get_footer(); ?>
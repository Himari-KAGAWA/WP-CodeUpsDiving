<?php get_header(); ?>

<main>
  <section class="sub-mv sub-mv__bg sub-mv__bg--about">
    <div class="sub-mv_inner">
      <div class="sub-mv__header">
        <h1 class="sub-mv__title">about us</h1>
      </div>
    </div>
    <div class="sub-mv__icon sub-mv__icon--about"></div>
  </section>

  <!-- breadcrumbs -->
  <?php get_template_part('breadcrumb'); ?>
  <!-- /breadcrumbs -->

  <!-- page-contents -->
  <div class="page top-page--about">
    <div class="page__inner">
      <div class="page__content page-about">
        <div class="page-about__inner inner">
          <div class="page-about__img-wrapper">
            <div class="page-about__img-left">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/about-bg.jpg" alt="シーサーの画像" />
            </div>
            <div class="page-about__img-right">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/about-bg_2.jpg" alt="熱帯魚の画像" />
            </div>
          </div>
          <div class="page-about__contents">
            <div class="page-about__lead">Dive into<br />the Ocean</div>
            <div class="page-about__copy">
              <p class="page-about__text u-desktop">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
              </p>
            </div>
          </div>
          <p class="page-about__text u-mobile">
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
          </p>
        </div>

        <!-- gallery -->
        <section class="page-galley top-page-gallery">
          <div class="page-galley__inner inner">
            <div class="page-galley__header section-header">
              <div class="section-header__engtitle">gallery</div>
              <h2 class="section-header__jatitle">フォト</h2>
            </div>
            <div class="page-gallery__content">
              <div class="page-gallery__items">

                <!-- ギャラリー画像呼出し -->
                <?php
                $imgGroup = SCF::get('about_gallery');
                if (!empty($imgGroup)) {
                  foreach ($imgGroup as $imgItem) {
                    $img_data = wp_get_attachment_image_src($imgItem['gallery_img'], 'full');
                    $url = $img_data[0];
                    $alt = get_post_meta($imgItem['gallery_img'], '_wp_attachment_image_alt', true) ?: get_post($imgItem['gallery_img'])->post_title;
                    echo '<div class="page-gallery__item js-modal__trigger">';
                    echo '<img src="' . esc_url($url) . '" alt="' . esc_attr($alt) . '">';
                    echo '</div>';
                  }
                }
                ?>

              </div>
            </div>
          </div>
          <div class="page-gallery__img-icon u-desktop">
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/pc/fish-illust_2.png" alt="魚の群れのアイコン" width="301" height="138" />
          </div>
        </section>
        <!-- /gallery -->
      </div>

      <!-- modal本体 -->
      <div class="page-gallery__modal modal js-modal fadeIn">
        <div class="modal__img-wrapper">
          <div class="modal__img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/page-gallery_01.jpg" alt="サンゴ礁と魚の群れの画像" width="345" height="523" />
          </div>
        </div>
        <div class="modal__bg js-modal-close"></div>
      </div>
      <!-- /modal -->
      <!-- /page-contents -->

      <!-- contact -->
      <?php get_template_part('layout-contact'); ?>
      <!-- /contact -->

</main>

<?php get_footer(); ?>
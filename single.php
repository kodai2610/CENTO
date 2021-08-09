<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_header(); ?>
</head>

<body>
  <?php get_template_part('includes/header'); ?>

  <div id="pagetitle_view">
    <div class="section_title title-white wrapper">
      <p class="read">ニュース</p>
      <h2 class="title-wh">NEWS</h2>
    </div>
  </div>

  <div class="breadclumb wrapper breadclumb__newsAr">
    <p><a href="index.html">HOME</a></p>
    <span>></span>
    <p><a href="service.html">ニュース</a></p>
  </div>

  <div class="ly_wrapper">
    <div class="ly_wrapper_inner">
      <main class="ly_main">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <div class="bl_singleNews">
              <time class="bl_singleNews_time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
              <h2 class="bl_singleNews_ttl"><?php the_title(); ?></h2>
              <figure class="bl_singleNews_imgWrapper">
                <?php if (has_post_thumbnail()) {
                  the_post_thumbnail('full');
                }; ?>
              </figure>
              <div class="bl_singleNews_txt">
                <?php the_content(); ?>
              </div>
            </div>
            <!--news-->
          <?php endwhile; ?>
        <?php endif; ?>
      </main>

      <?php get_template_part('includes/sidebar'); ?>
    </div>
    <!--wrapper_inner-->
  </div>
  <!--wrapper-->
  <?php get_template_part('includes/footer'); ?>
  <?php get_footer(); ?>
</body>

</html>
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
      <p><a href="<?php echo esc_url(home_url()); ?>">HOME</a></p>
      <span>></span>
      <p><a href="<?php echo esc_url(home_url('news')); ?>">ニュース</a></p>
    </div>

    <div class="ly_wrapper">
      <div class="ly_wrapper_inner">
        <main class="ly_main">
          <?php if (have_posts()) : ?>
          <ul class="bl_newsLists">
            <?php while(have_posts()): the_post(); ?>
            <li class="bl_news">
              <a href="<?php the_permalink(); ?>">
                <figure class="bl_news_imgWrapper">
                  <?php if(has_post_thumbnail()){
                    the_post_thumbnail('large');} //600 * 600
                  ?>  
                </figure>
                <div class="bl_news_body">
                  <time datetime="<?php the_time('Y-m-d'); ?>" class="bl_news_time"><?php the_time('Y.m.d'); ?></time>
                  <h3 class="bl_news_ttl">
                    <?php the_title(); ?>
                  </h3>
                  <p class="bl_news_txt">
                    <?php the_excerpt(); ?>
                  </p>
                </div>
                <!--body-->
              </a>
            </li>
            <?php endwhile; ?>
            <!--news-->
          </ul>
          <?php endif; ?>
        </main>

        <?php get_template_part('includes/sidebar'); ?>
      </div>
      <!--wrapper_inner-->
      <?php get_template_part('includes/pagination'); ?>
    </div>
    <!--wrapper-->
    <?php get_template_part('includes/footer'); ?>
    <?php get_footer(); ?>
  </body>
</html>

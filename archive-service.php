<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_header(); ?>
</head>

<body>
  <?php get_template_part('includes/header'); ?>
  <div id="pagetitle_view">
    <div class="section_title title-white wrapper">
      <p class="read">サービス</p>
      <h2 class="title-wh">SERVICE</h2>
      <p class="expo_1">自社事業および制作事例をご紹介</p>
    </div>

  </div>
  <main>
    <div class="breadclumb wrapper">
      <p><a href="index.html">HOME</a></p><span>></span>
      <p><a href="service.html">サービス</a></p>
    </div>

    <div class="lower_content-container">
      <?php if(have_posts()) : ?>
      <div class="lower-content">
        <?php while(have_posts()) : the_post() ?>
        <div class="lower_item service_item-1">
          <div class="item_title">
            <?php if(get_field('archive-icon')) : ?>
            <img src="<?php the_field('archive-icon');?>" alt="">
            <?php endif; ?>
            <p class="item_project"><?php the_field('title'); ?></p>
          </div>
          <p class="service_item-text">
            <?php the_field('explanation'); ?>
          </p>
        </div>
        <?php endwhile; ?>
      </div><!--lower-content-->
      <?php endif; ?>
    </div>
    <!--lower_content-container-->

  </main>




  <?php get_template_part('includes/footer'); ?>
  <?php get_footer(); ?>
</body>

</html>
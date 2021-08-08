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
          <ul class="bl_newsLists">
            <li class="bl_news">
              <figure class="bl_news_imgWrapper">
                <img src="./img/img_engineer.png" alt="" />
              </figure>
              <div class="bl_news_body">
                <time datetime="2021-06-11" class="bl_news_time">2021.06.11</time>
                <h3 class="bl_news_ttl">
                  面積2．5倍恵比/代官山の新オフィスへ移転しました
                </h3>
                <p class="bl_news_txt">
                  情けに棹せれば流される。智に働けば角が立つ。どこへ越しても住みにくいと悟った時、詩が生まれて、画が出来る。とかくに人の世は住みにくい。意地を通せば窮屈だ。
                </p>
              </div>
              <!--body-->
            </li>
            <!--news-->
            <li class="bl_news">
              <figure class="bl_news_imgWrapper">
                <img src="./img/img_engineer.png" alt="" />
              </figure>
              <div class="bl_news_body">
                <time datetime="2021-06-11" class="bl_news_time">2021.06.11</time>
                <h3 class="bl_news_ttl">
                  面積2．5倍恵比/代官山の新オフィスへ移転しました
                </h3>
                <p class="bl_news_txt">
                  情けに棹せれば流される。智に働けば角が立つ。どこへ越しても住みにくいと悟った時、詩が生まれて、画が出来る。とかくに人の世は住みにくい。意地を通せば窮屈だ。
                </p>
              </div>
              <!--body-->
            </li>
            <!--news-->
            <li class="bl_news">
              <figure class="bl_news_imgWrapper">
                <img src="./img/img_engineer.png" alt="" />
              </figure>
              <div class="bl_news_body">
                <time datetime="2021-06-11" class="bl_news_time">2021.06.11</time>
                <h3 class="bl_news_ttl">
                  面積2．5倍恵比/代官山の新オフィスへ移転しました
                </h3>
                <p class="bl_news_txt">
                  情けに棹せれば流される。智に働けば角が立つ。どこへ越しても住みにくいと悟った時、詩が生まれて、画が出来る。とかくに人の世は住みにくい。意地を通せば窮屈だ。
                </p>
              </div>
              <!--body-->
            </li>
            <!--news-->
          </ul>
        </main>

        <?php get_template_part('includes/sidebar'); ?>
      </div>
      <!--wrapper_inner-->
      <div class="bl_pagination">
         <ul class="page-numbers">
            <li>
               <span class="page-numbers current">1</span>
            </li>
            <li>
               <span class="page-numbers">2</span>
            </li>
            <li>
               <span class="page-numbers">3</span>
            </li>
            <li>
               <span class="page-numbers">4</span>
            </li>
            <li>
               <span class="page-numbers">5</span>
            </li>
            <li>
               <span class="page-numbers">></span>
            </li>
         </ul>
      </div>
    </div>
    <!--wrapper-->
    <?php get_template_part('includes/footer'); ?>
    <?php get_footer(); ?>
  </body>
</html>

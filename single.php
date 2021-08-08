<!DOCTYPE html>
<html lang="ja">
  <head>
    <?php get_header(); ?>
  </head>

  <body>
    <header class="header">
      <div class="header-top">
        <h1 class="logo logo_top">
          <a href="index.html"><img src="img/logo.png" alt="" /></a>
        </h1>
        <nav>
          <ul class="pc-nav">
            <li class="nav-list">
              <a href="index.html#service-top" class="stroke">SERVICE</a>
            </li>
            <li class="nav-list">
              <a href="index.html#news" class="stroke">NEWS</a>
            </li>
            <li class="nav-list">
              <a href="index.html#recruit" class="stroke">RECRUIT</a>
            </li>
            <li class="nav-list">
              <a href="index.html#company" class="stroke">COMPANY</a>
            </li>
            <li class="libtn">
              <a href="index.html#contact" class="btn-move sideway"
                ><span>お問い合わせ</span></a
              >
            </li>
          </ul>
        </nav>
      </div>
      <!--header-top-->

      <div class="openbtn">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div>
      <!--openbtn-->

      <nav id="slide-nav">
        <div id="slide-nav-list">
          <ul>
            <li class="slide-list">
              <a href="index.html#service-top" class="stroke">SERVICE</a>
            </li>
            <li class="slide-list">
              <a href="index.html#news" class="stroke">NEWS</a>
            </li>
            <li class="slide-list">
              <a href="index.html#recruit" class="stroke">RECRUIT</a>
            </li>
            <li class="slide-list">
              <a href="index.html#company" class="stroke">COMPANY</a>
            </li>
            <li class="slide-list">
              <a href="index.html#contact">お問い合わせ</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

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
          <div class="bl_singleNews">
            <span class="bl_singleNews_time">2015.01.26</span>
            <h2 class="bl_singleNews_ttl">面積2．5倍恵比/代官山の新オフィスへ移転しました</h2>
            <figure class="bl_singleNews_imgWrapper"><img src="./img/img_engineer.png" alt=""></figure>
            <div class="bl_singleNews_txt">
              <p>情けに棹せれば流される。智に働けば角が立つ。どこへ越しても住みにくいと悟った時、詩が生まれて、画が出来る。とかくに人の世は住みにくい。意地を通せば窮屈だ。</p>
              <p>情けに棹せれば流される。智に働けば角が立つ。どこへ越しても住みにくいと悟った時、詩が生まれて、画が出来る。とかくに人の世は住みにくい。意地を通せば窮屈だ。情けに棹せれば流される。智に働けば角が立つ。どこへ越しても住みにくいと悟った時、詩が生まれて、画が出来る。とかくに人の世は住みにくい。意地を通せば窮屈だ。 </p>
            </div>
          </div>
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

<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_header(); ?>
</head>

<body>
  <div id="fv">
    <?php get_template_part('includes/header'); ?>
    <div class="title-box wrapper">
      <h2>変化を楽しみ、<br>価値を生み出す</h2>
      <p>ENJOY CHANGE & CREATE VALUE</p>
    </div>

    <div class="fvcopy wrapper">
      <p class="copy"><small>&copy; 2020 CENTO.inc All Rights Reserved.</small></p>
    </div>
  </div>
  <!--fv-->

  <main>
    <div>
      <a href="#service"></a>
    </div>
    <section id="service">
      <div class="service-title blue-box" id="service-top">
        <div class="section_title title-white wrapper">
          <p class="read">サービス</p>
          <h3 class="title-wh">SERVICE</h3>
          <p class="expo_1">自社事業および制作事例をご紹介</p>
        </div>
      </div>

      <div class="circle_container wrapper">
        <?php
        global $post;
        $args = [
          'post_type' => 'service',
          'posts_per_page' => 4,
        ];
        $services = get_posts($args);
        //表示したい投稿を$postに割り当てる
        foreach ($services as $post) : setup_postdata($post);
        ?>
          <div class="circle">
            <div class="circle-link">
              <?php if (get_field('top-icon')) : ?>
                <img src="<?php the_field('top-icon'); ?>" alt="">
              <?php endif; ?>
              <p><?php the_field('title'); ?></p>
            </div>
          </div>
          <!--circle-->
        <?php endforeach;
        wp_reset_postdata($post); ?>
      </div>
      <!--circle_container-->

      <div class="pattern-square">
        <img src="<?php echo get_template_directory_uri(); ?>/img/img_service.png" alt="">
      </div>

      <button class="btn"><a href="<?php echo esc_url(home_url('/service')); ?>" class="btn-move sideway"><span>詳細はこちら</span></a></button>

    </section>
    <!--#service-->

    <section id="news">
      <div class="blue-box"></div>
      <div class="section_title title-black wrapper">
        <p class="read">ニュース</p>
        <h3 class="title-bl">NEWS</h3>
      </div>

      <?php if (have_posts()) : ?>
        <div class="news-box wrapper">
          <?php while (have_posts()) : the_post(); ?>
            <a href="<?php the_permalink(); ?>">
              <dl>
                <dt><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); //the_dateは同じ日付が一回しか表示されない 
                                                                  ?></time></dt>
                <dd><?php the_title(); ?></dd>
              </dl>
            </a>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>
      <!--news-box-->

      <button class="btn"><a href="<?php echo esc_url(home_url('/news')); ?>" class="btn-move sideway"><span>一覧はこちら</span></a></button>

    </section>
    <!--#news-->

    <section id="member">
      <div class="member-title blue-box">
        <div class="section_title title-white wrapper">
          <p class="read">メンバー</p>
          <h3 class="title-wh">MEMBER</h3>
        </div>
      </div>
      <div class="member-lists wrapper">
        <?php
        global $post; //グローバル変数をセット
        $args = [
          'posts_per_page' => 3,
          'post_type' => 'member',
        ];
        $members = get_posts($args);
        foreach ($members as $post) : setup_postdata($post);
        ?>
          <div class="member-list" id="wrap">
            <?php if (get_field('img')) : ?>
              <img src="<?php the_field('img');  ?>" alt="">
            <?php endif; ?>
            <div class="profile">
              <p class="name"><?php the_field('name'); ?></p>
              <p class="frame"><?php the_field('job'); ?></p>
              <p><?php the_field('comment'); ?></p>
            </div>
          </div>
        <?php endforeach;
        wp_reset_postdata($post); ?>
      </div>
      <!--lists-->

      </div>
      <!--slick-->

      <button class="btn"><a href="https://www.wantedly.com/companies/company_5734934" class="btn-move sideway"><span>詳細はWANTEDLYへ</span></a></button>

    </section>
    <!--#member-->

    <section id="recruit">
      <div class="wrapper">
        <div class="section_title title-black">
          <p class="read">採用情報</p>
          <h3 class="title-bl">RECRUIT</h3>
        </div>


        <div class="recruit_container">
          <?php
          global $post;
          $args = [
            'posts_per_page' => 3,
            'post_type' => 'recruit'
          ];
          $recruits = get_posts($args);
          foreach ($recruits as $post) : setup_postdata($post);
          ?>
            <div class="recruit-item">
              <?php if (get_field('img')) : ?>
                <img src="<?php the_field('img'); ?>" alt="">
              <?php endif; ?>
              <div class="work">
                <p class="profession"><?php the_field('job'); ?></p>
                <p class="frame"><?php the_field('contract'); ?></p>
                <p><?php the_field('comments'); ?></p>
              </div>
            </div>
            <!--item-->
          <?php endforeach;
          wp_reset_postdata($post); ?>
        </div>
        <!--recruit_container-->
      </div>
      <!--wrapper-->


      <div class="recruit_slick">
        <?php
        global $post;
        $args = [
          'posts_per_page' => 3,
          'post_type' => 'recruit'
        ];
        $recruits = get_posts($args);
        foreach ($recruits as $post) : setup_postdata($post);
        ?>
          <div class="recruit-item">
            <img src="<?php the_field('img'); ?>" alt="">
            <div class="work">
              <p class="profession"><?php the_field('job'); ?></p>
              <p class="frame"><?php the_field('contract'); ?></p>
              <p><?php the_field('comments'); ?></p>
            </div>
          </div>
        <?php endforeach;
        wp_reset_postdata($post); ?>
      </div>
      <!--slick-->

      <!-- <p class="details wrapper">詳細はWANTEDLYをご確認ください</p> -->

      <button class="btn wrapper"><a href="https://www.wantedly.com/companies/company_5734934" class="btn-move sideway"><span>詳細はWANTEDLYへ</span></a></button>
    </section>
    <!--#recruit-->

    <section id="company">
      <div class="company-title blue-box">
        <div class="section_title title-white wrapper">
          <p class="read">会社概要</p>
          <h3 class="title-wh">COMPANY</h3>
        </div>
      </div>
      <table class="overview wrapper">
        <tr>
          <th>会社名</th>
          <td>株式会社CENTO（チェント）</td>
        </tr>
        <tr>
          <th>設立</th>
          <td>2019年3月12日</td>
        </tr>
        <tr>
          <th>本店登記住所</th>
          <td>〒150-0046 東京都渋谷区松濤1丁目28−2</td>
        </tr>
        <tr>
          <th>代表番号</th>
          <td>0563-65-4370 ※営業電話はお控えください</td>
        </tr>
        <tr>
          <th>代表取締役</th>
          <td>宇野 真史</td>
        </tr>
        <tr>
          <th>取締役</th>
          <td>千住 洋平</td>
        </tr>
        <tr>
          <th>資本金</th>
          <td>300万円</td>
        </tr>
      </table>

      <div class="ggmap">
        <div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.695303571296!2d139.6926466508119!3d35.65987798010214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188d37144ff26d%3A0xee2f7dc96f91635!2zV09SSyBDT1VSVOa4i-iwt-advua_pOOCs-ODr-ODvOOCreODs-OCsOOCueODmuODvOOCuSDjgrfjgqfjgqLjgqrjg5XjgqPjgrk!5e0!3m2!1sja!2sjp!4v1625291077986!5m2!1sja!2sjp" width="800" height="800" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </section>
  </main>

  <section id="contact" class="wrapper">
    <div class="section_title title-black wrapper">
      <p class="read">お問合せ</p>
      <h3 class="title-bl">CONTACT</h3>
      <p class="expo_2">IT/WEBに関するお困りごとや<br class="ex_2">お悩みがございましたら<br>お気軽にお問い合わせください。</p>
    </div>


    <button class="line-btn"><a href="https://lin.ee/yxGbYGb" class="line-move sideway-line"><span>LINEでお問い合わせ</span></a></button>

    <div class="form">
      <?php echo do_shortcode('[mwform_formkey key="93"]'); ?>
      <!-- <form action="" method="POST" id="mailform">
        <div class="forms">
          <label for="nameval">名前<span>必須</span></label>
          <input type="text" id="name" name="nameval" required>
        </div>

        <div class="forms">
          <label for="mailval">メールアドレス<span>必須</span></label>
          <input type="email" id="email" name="mailval" required>
        </div>

        <div class="forms">
          <label for="telval">お電話番号</label>
          <input type="tel" id="tel" name="telval">
        </div>

        <div class="forms">
          <label for="addressval">ご住所</label>
          <input type="text" id="address" name="addressval" required>
        </div>

        <div class="forms">
          <label for="textval" class="form-mess">お問い合わせ内容</label>
          <textarea name="textval" id="message" required></textarea>
        </div>
        <p>※営業メールはお断りしております</p>
        <!-- xdcfver.com時のリキャプチャー -->
        <!-- <div class="g-recaptcha" data-sitekey="6Lc3s-EbAAAAADBPIdn3noF8J5xWBd8qG92dOdG2"></div> -->
        <!-- <button class="btn" type="submit"><a class="btn-move sideway"><span>送信する</span></a></button>
      </form>  -->
    </div>
    <!--form-->
  </section>
  <!-- <div class="bl_complete">
    <div class="bl_complete_check"></div>
    <h4 class="bl_complete_ttl">お問い合わせありがとうございます。入力が完了いたしました。</h4>
    <p class="bl_complete_txt">
      お問い合わせ内容については、順次対応させていただきます。<br>
      システムによる自動返信にて、受付完了メールを送信しております。<br>
      受付完了メールが届かない場合は、お手数ですが再度お問い合わせいただくか、弊社までご一報ください
    </p><!--txt-->
    <!-- <div class="bl_complete_box">
      <dl>
        <dt>名前：</dt>
        <dd>秋和昂大</dd>
      </dl>
      <dl>
        <dt>メールアドレス：</dt>
        <dd>koudai_akiwa1230@keio.jp</dd>   
      </dl>
      <dl>
        <dt>電話番号：</dt>
        <dd>000-000-000</dd>
      </dl>
      <dl>
        <dt>ご住所：</dt>
        <dd>000-0000 あああああああああああああああ</dd>
      </dl>
      <dl>
        <dt>お問い合わせ内容：</dt>
        <dd>ああああああああああああああああああああああああああああああああああああああああああ</dd>
      </dl>
    </div><!--box-->
    <!-- <button class="btn"><a class="btn-move sideway" href=""><span>トップへ戻る</span></a></button>
  </div>  -->
  <?php get_template_part('includes/footer'); ?>      
  <?php get_footer(); ?>
</body>

</html>
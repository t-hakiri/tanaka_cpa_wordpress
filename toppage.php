<?php
/*
Template Name: toppageのテンプレート
*/
?>
<?php get_header(); ?>
  <div class="contents">

    <div class="main">
      <!-- タイトルの表記 -->
      <?php
      if(is_home() || is_front_page()) {
        $title_tag_start = '<h1 class="site-title">';
        $title_tag_end = '</h1>';
      } else {
        $title_tag_start = '<p class="site-title">';
        $title_tag_end =  '</p>';
      }
      ?>
      <div class="site-title-wrap top-title">
        <?php echo $title_tag_start; ?>
          <a href="<?php echo home_url(); ?>">
            <?php bloginfo( 'name' ); ?>
          </a>
        <?php echo $title_tag_end; ?>
      </div>
      <!-- end タイトルの表記 -->

      <section class="section js-section section1" data-section-name="section1">
        <div class="section-content">
          <div class="container top_content">
          </div>
        </div>
      </section>
      <section class="section js-section section2" data-section-name="section2">
        <div class="section-content">
          <div class="container z-depth-1 vision_wrap">
            <!--Section: Content-->
            <section class="dark-grey-text">

              <div class="container-fluid">
                <div class="d-flex align-items-center">
                  <div class="container mb-4">
                    <h1 class="font-weight-bold mb-4">さらなる価値をお客様へ</h3>
                    <h2>"Quality"</h2>
                    <p>我々の自己満足ではなく、あくまでもお客様の目線で</br>満足していただける会計・税務のサービス</j>
                    <h2>"Speed"</h2>
                    <p>お客様の疑問や悩みに可能な限り早いレスポンスでの対応</j>
                    <h2>"Communication"</h2>
                    <p>お客様との相互理解と信頼を大切にする</p>
                  </div>
                </div>
              </div>
            </section>
            <!--Section: Content-->
          </div>
        </div>
      </section>
      <section class="section js-section section3 split_section" data-section-name="section3">
        <div class="split_section_bg1" href="/contact"></div>
        <div class="split_section_bg2" href="/profile"></div>
        <div class="section-content">
          <div class="greeting_content">
            <a href="#" class= "btn btn-rounded mx-0 greeting_link1">プロフィール</a>
            <a href="#" class= "btn btn-rounded mx-0 greeting_link2">事業内容</a>
          </div>
        </div>
      </section>
      <section class="section js-section section4" data-section-name="section4">
        <div class="section-content">
          <div class="container support_for_venture_wrap">
            <section class="dark-grey-text">
              <div class="container-fluid max-width">
                <div class="d-flex align-items-center">
                  <div class="container">
                    <h1 class="font-weight-bold">ベンチャー企業支援について</h3>
                    <p>以下の条件を満たす企業について会社設立時からビジネスが軌道にのるまで、無料で会計・税務だけではなく、会社の運営の仕方やビジネスで必須の管理的な知識について無料で何回でも相談を受けたいと思います。</p>
                    <ul class="li">
                      <li>社長が30歳未満</li>
                      <li>インターネットサービス業</li>
                    </ul>
                    <p>この支援は、プロボノの一つとして考えています。プロボノとは、専門家がその知識・スキルや経験を生かして社会貢献するというボランティアです。海外や日本の仕業でも弁護士などは行われていると聞きますが、残念ながら私が属している会計業界では十分ではありません。</p>
                    <p>また、今後日本が持続的な発展をするためには、ベンチャー企業の存在が欠かせないと思います。また、そのベンチャー企業は若い経営者の思想から生まれるのではないかと思っています。また、インターネットビジネスは他のビジネスに比べて初期投資が相対的に少なく、参入しやすい業種であり、その可能性は大きいという認識を持っています。</p>
                    <p>そのため、社長が30歳未満で、インターネットサービス業であるという条件下ではありますが、専門家として何かお手伝いできないかという意識でこの支援を始めました。 学生の方で就職に有利になるからベンチャーをやっていますという起業家ではなく、人生フルコミットしているような若手起業家との出会いを楽しみにしています。</p>
                    <p>なお、所長である私本人が知識・スキルの出し惜しみのない支援をさせて頂きますので、ご依頼を頂きましてもそのときの支援状況に応じては、お待ちいただいたりすることもあるかと思いますが、何卒ご理解をお願い致します。</p>
                  </div>
                </div>
              </div>
            </section>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
          </div>
        </div>
      </section>

      <section class="section js-section section5 split_section" data-section-name="section5">
        <div class="split_section_bg1" href="/contact"></div>
        <div class="split_section2_bg2 business_bg" href="/profile"></div>
        <div class="section-content">
          <div class="business_content">
            <a href="#" class="btn btn-rouded mx-0 business_link1">費用について</a>
            <a href="#" class="btn btn-rouded mx-0 business_link2">よくある質問</a>
          </div>
        </div>
      </section>

      <section class="section js-section section6" data-section-name="section6">
        <div class="section-content test">
          <div class="container company_profile_wrap z-depth-1">
            <!--Section: Content-->
            <section class="dark-grey-text">
                <div class="d-flex align-items-center">
                  <div class="container-fluid">
                    <h1 class="font-weight-bold mb-4">会社概要</h3>
                    <p class="font-weight-bold">事務所名</p>
                    <p>田中公認会計士税理士事務所</p>
                    <hr>
                    <p class="font-weight-bold">所在地</p>
                    <p>東京都港区西新橋2-5-1山引ビル3F</p>
                    <hr>
                    <p class="font-weight-bold">連絡先</p>
                    <p>03-3504-0106</p>
                    <p>info@tanaka-accounting.jp</p>
                    <hr>
                    <p class="font-weight-bold">Facebook</p>
                    <hr>

                    <a href="#" class="btn btn-orange btn-rouded company_btn"></a>
                    <div id="map-container-section" class="z-depth-1-half map-container-section" style="height: 400px">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.395649004936!2d139.75064085108085!3d35.66725878010034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188becaeea9871%3A0xacbe974f4df533d7!2z44CSMTA1LTAwMDMg5p2x5Lqs6YO95riv5Yy66KW_5paw5qmL77yS5LiB55uu77yVIOWxseW8leODk-ODqw!5e0!3m2!1sja!2sjp!4v1457082885289" frameborder="0"
                        style="border:0" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>
              </div>

            </section>
            <!--Section: Content-->
          </div>
        </div>
      </section>
    </div>

  </div><!--end contents-->

<?php get_footer(); ?>




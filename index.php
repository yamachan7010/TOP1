<!DOCTYPE html>
<html lang="ja">

<head>

    <?php get_header(); ?>

</head>

<body>
    <h1 class="visuallyhidden">yamachan</h1><!-- /.visuallyhidden -->
    <!-- mv -->
    <div class="bl_jumbotron" style="background: url(<?php echo get_template_directory_uri(); ?>/image/header/mv.jpg) center center /cover;">

    <!-- ヘッダー -->
        <?php get_template_part('includes/header'); ?>

        <div class="bl_jumbotron_inner js-parallax">
            <h2 class="bl_jumbotronMain-ttl ">
                Let's see a bright future together.
            </h2><!-- /.bl_jumbotronMain-ttl -->
            <p class="bl_jumbotronSub-ttl">
                一緒に明るい未来を見てみませんか。
            </p><!-- /.bl_jumbotronSub-ttl -->
        </div><!-- /.bl_jumbotron_inner -->
    </div><!-- /.jumbotron -->
    <div class="ly_container">
        <!-- メインコンテンツ -->
        <main>
            <section id="about">
                <div class="bl_about">
                    <div class="bl_about_inner">

                        <div class="el_header">
                            <h2 class="el_ttl">About</h2>
                            <p class="el_subTtl">自己紹介</p>
                        </div>
                        <div class="bl_aboutIntroduction">
                            <div class="bl_aboutImg" style="background: url(<?php echo get_template_directory_uri(); ?>/image/top/yama.jpg) center center /cover;"></div>

                            <div class="bl_aboutContainer">
                                <h2 class="bl_about_ttl">my-profile</h2> 
                                <div class="bl_aboutContents">
                                    <p class="bl_aboutItem">名前:山崎 直人 (やまざきなおと)</p>
                                    <p class="bl_aboutItem">ニックネーム: やまちゃん</p>
                                    <p class="bl_aboutItem">出身: 栃木県</p>
                                    <p class="bl_aboutItem">趣味: 音楽を聞く事・ドライブ・パソコン等の作成</p>
                                    <p class="bl_aboutItem">毎日、自分の考えを広げて、多方向から物事を見られるように励んでおります。発注者様が喜んでいただけるよう精一杯やらせていただきます！</p>
                                </div>
                            </div>
                        </div><!-- /.bl_aboutIntroduction -->
                    </div>
                </div>
            </section>
    
            <section>
                <div class="bl_skill">
                    <div class="bl_skill_inner">
                        <div class="el_header">
                            <h2 class="el_ttl">Skill</h2>
                            <p class="el_subTtl">スキル</p>
                        </div>
                        <div class="bl_skillContainer">
                            <div class="bl_skillContents">
                                <div class="bl_skillLogo">
                                    <i class="fa-brands fa-html5"></i>
                                </div>
                                <p class="bl_skillName">HTML5</p>
                                <p class="skillCareer_year">学習期間　8ヵ月</p><!-- /.bl_skillCareer_date -->
                            </div>
                            <div class="bl_skillContents">
                                <div class="bl_skillLogo">
                                    <i class="fa-brands fa-css3-alt"></i>
                                </div>
                                <p class="bl_skillName">CSS3</p>
                                <p class="skillCareer_year">学習期間　8ヵ月</p><!-- /.bl_skillCareer_date -->
                            </div>
                            <div class="bl_skillContents">
                                <div class="bl_skillLogo">
                                    <i class="fa-brands fa-sass"></i>
                                </div>
                                <p class="bl_skillName">Sass</p>
                                <p class="skillCareer_year">学習期間　6ヵ月</p><!-- /.bl_skillCareer_date -->
                            </div>
                            <div class="bl_skillContents">
                                <div class="bl_skillLogo">
                                    <i class="fa-brands fa-js"></i>
                                </div>
                                <p class="bl_skillName">javascript</p>
                                <p class="skillCareer_year">学習期間　4ヵ月</p><!-- /.bl_skillCareer_date -->
                            </div>
                            <div class="bl_skillContents">
                                <div class="bl_skillLogoImg">
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/top/jQuery-Logo.png" alt="jQuery" width="3.9" height="1">
                                </div>
                                <p class="bl_skillName">jQuery</p>
                                <p class="skillCareer_year">学習期間　4ヵ月</p><!-- /.bl_skillCareer_date -->
                            </div>
                            <div class="bl_skillContents">
                                <div class="bl_skillLogo">
                                    <i class="fa-brands fa-wordpress"></i>
                                </div>
                                <p class="bl_skillName">WordPress</p>
                                <p class="skillCareer_year">学習期間　3ヵ月</p><!-- /.bl_skillCareer_date -->
                            </div>
                            
                        </div>
                    </div>
                </div>
            </section>
    
            <section id="works">
                <div class="bl_work">
                    <div class="bl_work-inner">
                        <div class="el_header">
                            <h2 class="el_ttl">Works</h2>
                            <p class="el_subTtl">制作物</p>
                        </div>
                        <div class="bl_workSlick js-slick">
                            <div class="bl_workCarousel_wrap">
                                <ul id="carousel" class="bl_workCarousel_list">
                                    <li>
                                        <article class="bl_workCarousel_item">
                                            <a href="<?php echo home_url(); ?>" class="bl_worklink">
                                                <div class="bl_workImg" style="background: url(<?php echo get_template_directory_uri(); ?>/image/top/portfolio-site.jpg) center center/cover;"></div>
                                                <div class="bl_workContent">
                                                    <p class="bl_workDate">2022年3月30日</p><!-- /.bl_workDate -->
                                                    <p class="bl_workName">ポートフォリオサイトの作成</p><!-- /.bl_companyName -->
                                                    <p class="bl_workPeriod">制作期間　2週間</p><!-- /.bl_companyName -->
                                                </div>
                                            </a><!-- /.bl_worklink -->
                                        </article>
                                    </li>
                                    <li>
                                        <article class="bl_workCarousel_item">
                                            <div class="bl_workImg" style="background: url(<?php echo get_template_directory_uri(); ?>/image/top/work.jpg) center center/cover;"></div>
                                            <div class="bl_newsContent">
                                                <p class="bl_workDate">〇月〇〇日</p><!-- /.bl_workDate -->
                                                <p class="bl_workName">〇〇〇〇会社様</p><!-- /.bl_companyName -->
                                            </div>
                                        </article>
                                    </li>
                                    <li>
                                        <article class="bl_workCarousel_item">
                                            <div class="bl_workImg" style="background: url(<?php echo get_template_directory_uri(); ?>/image/top/work.jpg) center center/cover;"></div>
                                            <div class="bl_newsContent">
                                                <p class="bl_workDate">〇月〇〇日</p><!-- /.bl_workDate -->
                                                <p class="bl_workName">〇〇〇〇会社様</p><!-- /.bl_companyName -->
                                            </div>
                                        </article>
                                    </li>
                                    
                                </ul>
                            
                            </div><!-- /.js-slick -->
                        </div>
                    </div>
                </div>
            </section>
    
            <section id="service">
                <div class="bl_service">
                    <div class="bl_service-inner">
                        <div class="el_header">
                            <h2 class="el_ttl">service</h2>
                            <p class="el_subTtl">サービス</p>
                        </div>
                        <div class="bl_serviceContainer">
                            <div class="bl_serviceContents">
                                <h2 class="bl_service_ttl el_blueLine">機敏なレスポンス</h2>
                                <p class="bl_serviceExplanation">
                                    ご連絡を確認後24時間以内に返信いたします。<br>
                                    俊敏なレスポンスと丁寧な対応を心がけ、発注者様を不安にさせないコミュニケーションを図ります。
                                </p>
                            </div>
                            <div class="bl_serviceContents">
                                <h2 class="bl_service_ttl el_blueLine">管理しやすいサイトづくり</h2>
                                <p class="bl_serviceExplanation">
                                    CSS設計やWordPressを用いり、発注者様にも分かりやすい設計やレスポンスの早い更新ができます。
                                    <br>また、納品前のテストを始め、1つ1つの作業を発注者様と一緒に作っていきます。
                                </p>
                            </div>
                            <div class="bl_serviceContents">
                                <h2 class="bl_service_ttl el_blueLine">新しいスキルの取得</h2>
                                <p class="bl_serviceExplanation">
                                    発注者様の選択の幅が広がるように、私自身日々新たなことにチャレンジしていきます。<br>ご質問などありましたら、気楽にご連絡ください！
                                </p>
                            </div>
                        </div>
                        <div class="bl_localAnnouncement">
                            <h2 class="bl_localAnnouncement_ttl">ご覧になっている発注者様へ</h2><!-- /.bl_localAnnouncementTtl -->
                            <a href="<?php echo home_url(); ?>/service" class="bl_localAnnouncementNext">
                                <img src="<?php echo get_template_directory_uri(); ?>/image/top/service-next-button.svg"  class="el_NextBtn" alt="サービスの詳しい詳細を見る" width="30" height="30">
                                <p class="bl_NextBtn_txt">
                                    サービスの詳しい詳細はこちらから
                                </p><!-- /.bl_NextBtnTxt -->
                            </a><!-- /.bl_localAnnouncementNext -->
                        </div><!-- /.bl_localAnnouncement -->
                    </div>
                </div>
            </section>

            <section>
                <div class="bl_cta">
                    <h2 class="bl_cta_ttl">お気軽にお問い合わせください</h2><!-- /.bl_cta_ttl -->
                    <p class="bl_cta_txt">
                        サービスのことで気になることがありましたら、
                        <br class="u-sp-none u-pc-none">お気軽にお問い合わせください。
                    </p><!-- /.bl_cta_txt -->
                    <a href="<?php echo home_url(); ?>/contact" class="el_ctaBtn">問い合わせする</a>
                </div><!-- /.bl_cta -->
            </section>
        </main>
    </div>
    <!-- /.container -->
    <!-- フッター -->
    <?php get_template_part('includes/footer'); ?>

    <?php get_footer(); ?>
</body>

</html>
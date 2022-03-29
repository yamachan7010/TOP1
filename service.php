<?php
/*
    Template Name: service(自分で分かりやすい名前をつける) 
*/
?>

<!DOCTYPE html>
<html lang="ja">

<head>

    <?php get_header(); ?>

</head>

<body>

    <!-- header,footer,備考 -->
    <!-- ヘッダー -->
    <?php get_template_part('includes/header'); ?>

        <!-- メインコンテンツ -->
        <main>
            <section>
                <div class="ly_contact_container">
                    <div class="el_header">
                        <h2 class="el_ttl">service</h2>
                        <p class="el_subTtl">詳しいサービス</p>
                    </div>

                    <div class="bl_mv">
                        <div class="bl_mvBorder"></div><!-- /.bl_mvborder -->
                            <div class="bl_mv_inner js-parallax">
                                <h2 class="bl_mv-ttl ">
                                    主要目的に合わせたウェブ。
                                    <br>課題解決に合わせた対応を。
                                </h2><!-- /.bl_mvMain-ttl -->
                                <p class="bl_mvSub-ttl">
                                    発注者様の状況などを分析しながら、成長できるように。
                                    <br>欅の木のような何年経っても大きく、たくましい…
                                    <br>そんなたくさんの人に届くウェブサイトを。
                                </p><!-- /.bl_mvSub-ttl -->
                            </div><!-- /.bl_mv_inner -->
                    </div><!-- /.bl_mv -->
                
                    <div class="bl_reason_box">
                        <div class="bl_ttl_box">
                            <div class="bl_number">
                                <span>01</span>
                            </div><!-- /.bl_number -->
                            <h3 class="bl_serviceSection_ttl">
                                ウェブサイトを作るにあたり、
                                親密な関係を築き上げていきます。
                            </h3><!-- /.bl_serviceSection_ttl -->
                        </div><!-- /.bl_serviceSection_box -->
                        <h2 class="bl_serviceSection_subTtl">
                            何気ない会話や雑談を活かした
                            <br class="u-sp-none u-pc-none">コミュニケーション
                        </h2><!-- /.serviceSection_txt -->
                        <p class="bl_serviceSection_txt">
                            何気ないコミュニケーションから話を広げていくことによって関係構築をしていきます。
                        </p><!-- /.bl_serviceSection_txt -->
                    </div><!-- /.bl_reason_box -->
                    <div class="bl_reason_box ">
                        <div class="bl_ttl_box">
                            <div class="bl_number">
                                <span>02</span>
                            </div><!-- /.bl_number -->
                            <h3 class="bl_serviceSection_ttl">
                                ユーザーと発注者様を繋げられるように、
                                <br class="u-sp-none u-pc-none">魅力・強みを発見していきます。
                            </h3><!-- /.bl_serviceSection_ttl -->
                        </div><!-- /.bl_serviceSection_box -->
                        <h2 class="bl_serviceSection_subTtl">
                            依頼者様の課題や今後の目標・展望
                            <br class="u-sp-none u-pc-none">から新たな強みを。
                        </h2><!-- /.serviceSection_txt -->
                        <p class="bl_serviceSection_txt">
                            ヒアリングの際に、課題や目標などを伺い、
                            <br class="u-sp-none u-pc-none">整理していく中で新たな依頼者様の強みを発見していきます。
                        </p><!-- /.bl_serviceSection_txt -->
                    </div><!-- /.bl_reason_box -->
                    <div class="bl_reason_box">
                        <div class="bl_ttl_box">
                            <div class="bl_number">
                                <span>03</span>
                            </div><!-- /.bl_number -->
                            <h3 class="bl_serviceSection_ttl">
                                レスポンスの速さで発注者様を心配させません。
                            </h3><!-- /.bl_serviceSection_ttl -->
                        </div><!-- /.bl_serviceSection_box -->
                        <h2 class="bl_serviceSection_subTtl">
                            発注者様の不安な点を
                            <br class="u-sp-none u-pc-none">レスポンスの速さで解決。
                        </h2><!-- /.serviceSection_txt -->
                        <p class="bl_serviceSection_txt">
                            ご連絡後(２時間以内)に返答致します。
                            <br class="u-sp-none u-pc-none">すぐに返答できない場合もございますが、前もってメールのほうでご連絡致します。
                        </p><!-- /.bl_serviceSection_txt -->
                    </div><!-- /.bl_reason_box -->
                    <div class="bl_reason_box">
                        <div class="bl_ttl_box">
                            <div class="bl_number">
                                <span>04</span>
                            </div><!-- /.bl_number -->
                            <h3 class="bl_serviceSection_ttl">
                                情報の共有で相互理解を深める。
                            </h3><!-- /.bl_serviceSection_ttl -->
                        </div><!-- /.bl_serviceSection_box -->
                        <h2 class="bl_serviceSection_subTtl">
                            情報共有で発注者様が持つ
                            <br class="u-sp-none u-pc-none">「不安要素」を解決。
                        </h2><!-- /.serviceSection_txt -->
                        <p class="bl_serviceSection_txt">
                            納品までのスケジュールや現時点の進行状況を発注者様と共有していくことで少しでも不安要素を減らして行きます。
                        </p><!-- /.bl_serviceSection_txt -->
                    </div><!-- /.bl_reason_box -->
                    

                <p class="bl_service_txt">
                    そのほかに分からないことなどがありましたら、気楽にお問い合わせください。
                </p>
            </div><!-- /.ly_contact_container -->
            </section>
        </main>
            
            
    <!-- フッター -->
    <?php get_template_part('includes/footer'); ?>

    <?php get_footer(); ?>
</body>

</html>
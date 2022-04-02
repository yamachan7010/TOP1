<?php
/*
Template Name: contact
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
                    <div class="el_header" id="contact">
                        <h2 class="el_ttl">contact</h2>
                        <p class="el_subTtl">お問い合わせ　</p>
                    </div>
                    <p class="bl_contact_txt">
                        ご相談やご依頼、ご質問等ありましたら、<br>遠慮なくお問い合わせください。
                    </p><!-- /.bl_contact_txt -->
                </div><!-- /.ly_contact_container -->
                <div class="ly_contact">
                    <div class="ly_contactForm_container">

                    <iframe name="hidden_iframe" id="hidden_iframe" style="display:none;" onload="onLoad()">
                    </iframe>
                        <form action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSdtba5R0UHeo9_UDRrMA5hwH499l8Axu_zcgVqRF_Q58hexKw/formResponse" 
                            method="POST" target="hidden_iframe" onsubmit="submitted=true">

                            <div class="bl_contactForm">
                                <table>
                                    <tbody>
                                        <tr>
                                            <th>会社名
                                                <span class="el_any">任意</span><!-- /.el_any -->
                                            </th>
                                            <td>
                                                <input name="entry.1071714603" type="text" class="el_contact" >
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>お名前
                                                <span class="el_mandatory">必須</span><!-- /.el_mandatory -->
                                            </th>
                                            <td class="bl_name">
                                                <input name="entry.1745655164" type="text" class="el_name" placeholder="例）山崎" required="">
                                                <input name="entry.2146937615" type="text" class="el_name" placeholder="例）太郎" required=""> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>電話番号
                                                <span class="el_any">任意</span><!-- /.el_any -->
                                            </th>
                                            <td>
                                                <input name="entry.2082727347"  type="text" name="telephone" class="el_contact">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>メールアドレス
                                                <span class="el_mandatory">必須</span><!-- /.el_mandatory -->
                                            </th>
                                            <td>
                                                <input name="entry.1829173330" type="email" name="email" class="el_contact" placeholder="例）○○-○○@mountain.jp" required="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>URL
                                                <span class="el_any">任意</span><!-- /.el_any -->
                                            </th>
                                            <td>
                                                <input name="entry.299300591" type="text" name="URL" class="el_contact">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>ご要望
                                                <span class="el_mandatory">必須</span><!-- /.el_mandatory -->
                                            </th>
                                            <td>
                                                <div class="el_checkbox">
                                                    <input name="entry.42760027" type="checkbox" value="新規制作（ウェブサイト）のお依頼" id="new-site">
                                                    <label for="new-site">新規制作(ウェブサイト)のお依頼</label> 
                                                </div><!-- /.el_checkbox -->
                                                <div class="el_checkbox">
                                                    <input name="entry.42760027" type="checkbox" value="既存サイトの修正" id="site-fix">
                                                    <label for="site-fix">既存サイトの修正</label> 
                                                </div><!-- /.el_checkbox -->
                                                <div class="el_checkbox">
                                                    <input name="entry.42760027" type="checkbox" value="サービスに関する質問・相談" id="question-consultation">
                                                    <label for="question-consultation">サービスに関する質問・相談</label> 
                                                </div><!-- /.el_checkbox -->
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>内容
                                                <span class="el_mandatory">必須</span><!-- /.el_mandatory -->
                                            </th>
                                            <td>
                                                <textarea  name="entry.1931379307" id="" cols="30" rows="10" class="bl_textarea" placeholder="例）Webサイトの見積もりをしたい。○○という依頼をしたくて…等" required=""></textarea><!-- /# -->
                                            </td>
                                        </tr>
                                    </tbody>
                                </table><!-- /.bl_contactForm -->
                            </div><!-- / -->
                            <div class="bl_confirmation">
                                <input name="entry.2070595246"  type="checkbox" value="送信内容を確認の上チェックしてください。" id="confirmation" required="">
                                <label for="confirmation">送信内容を確認の上チェックしてください。</label> 
                            </div><!-- /.bl_confirmation -->
                            
                            <div class="el_textCenter">
                                <input type="submit" value="送信する" class="el_contactBtn">
                            </div>
                        </form>
                        <div class="bl_successArea">
                            <div class="bl_successWrapper">
                                <p id="success">
                                    送信が完了致しました。
                                    <br>
                                    ご返信には約1日お時間を要する場合がございますので、それまで待っていただけるとありがたいです。
                                    <br>
                                    本日は、お問い合わせありがとうございました。</p>
                            </div><!-- /.success-wrapper -->
                        </div><!-- /.success-area -->
                        
                    </div>
                </div><!-- /.ly_contact -->        
            </section>
        </main>
            
            
    <!-- フッター -->
    <?php get_template_part('includes/footer'); ?>

    <?php get_footer(); ?>
    
</body>

</html>
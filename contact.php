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
                        <form action="">
                            <div class="bl_contactForm">
                                <table>
                                    <tbody>
                                        <tr>
                                            <th>会社名
                                                <span class="el_any">任意</span><!-- /.el_any -->
                                            </th>
                                            <td>
                                                <input type="text" name="company" class="el_contact">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>お名前
                                                <span class="el_mandatory">必須</span><!-- /.el_mandatory -->
                                            </th>
                                            <td class="bl_name">
                                                <input type="text" name="first-name" class="el_name" placeholder="例）山崎">
                                                <input type="text" name="last-name" class="el_name" placeholder="例）太郎">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>電話番号
                                                <span class="el_any">任意</span><!-- /.el_any -->
                                            </th>
                                            <td>
                                                <input type="text" name="telephone" class="el_contact">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>メールアドレス
                                                <span class="el_mandatory">必須</span><!-- /.el_mandatory -->
                                            </th>
                                            <td>
                                                <input type="email" name="email" class="el_contact" placeholder="例）○○-○○@mountain.jp">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>URL
                                                <span class="el_any">任意</span><!-- /.el_any -->
                                            </th>
                                            <td>
                                                <input type="text" name="URL" class="el_contact">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>ご要望
                                                <span class="el_mandatory">必須</span><!-- /.el_mandatory -->
                                            </th>
                                            <td>
                                                <div class="el_checkbox">
                                                    <input type="checkbox" name="item1" value="1" id="new-site">
                                                    <label for="new-site">新規制作(ウェブサイト)のお依頼</label> 
                                                </div><!-- /.el_checkbox -->
                                                <div class="el_checkbox">
                                                    <input type="checkbox" name="item2" value="2" id="site-fix">
                                                    <label for="site-fix">既存サイトの修正</label> 
                                                </div><!-- /.el_checkbox -->
                                                <div class="el_checkbox">
                                                    <input type="checkbox" name="item3" value="3" id="question-consultation">
                                                    <label for="question-consultation">サービスに関する質問・相談</label> 
                                                </div><!-- /.el_checkbox -->
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>内容
                                                <span class="el_mandatory">必須</span><!-- /.el_mandatory -->
                                            </th>
                                            <td>
                                                <textarea name="content" id="" cols="30" rows="10" class="bl_textarea" placeholder="例）Webサイトの見積もりをしたい。○○という依頼をしたくて…等"></textarea><!-- /# -->
                                            </td>
                                        </tr>
                                    </tbody>
                                </table><!-- /.bl_contactForm -->
                            </div><!-- / -->
                            <div class="bl_confirmation">
                                <input type="checkbox" name="confirmation" id="confirmation" >
                                <label for="confirmation">送信内容を確認の上チェックしてください。</label> 
                            </div><!-- /.bl_confirmation -->
                            
                            <div class="el_textCenter">
                                <button type="submit" class="el_contactBtn">送信する</button>
                            </div>
                        </form>
                    </div>
                </div><!-- /.ly_contact -->        
            </section>
        </main>
            
            
    <!-- フッター -->
    <?php get_template_part('includes/footer'); ?>

    <?php get_footer(); ?>
    
</body>

</html>